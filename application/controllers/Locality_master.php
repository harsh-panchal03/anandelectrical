<?php


class Locality_master extends  MY_controller{
    
    
    public function __construct(){
       
        parent::__construct();
        
        $this->tableName = LOCALITY_TABLE;
        $this->redirectUrl = LOCALITY_URL;
        $this->folderName = ADMIN_FOLDER."locality/";
        $this->perPageRecord = PER_PAGE;
        $this->moduleName = $this->lang->line("locality");
        $this->load->model('locality_model' , 'crud_model');
        
    }
    
    public function index(){
        
        
        $newData = $this->crud_model->selectData("new_description_master");
        $html = "";
        foreach ($newData as $data){
            $html .= "<a class='dropdown-item' data-value='". $data->i_parent_category_id + 1 ."' data-level='".( $data->i_parent_category_id + 1 )."' href='#'>". $data->v_description ."</a><br>";
        }
        
        $headerData = $data = [];
        $paginationData = $whereData = [];
        
        $page = (!empty($this->input->post("page")) ? $this->input->post("page") : DEFAULT_PAGE_INDEX );
        
        if($page == DEFAULT_PAGE_INDEX){
            
            $totalRecord = count($this->crud_model->getRecordDetails( [ 'l.i_id' ] ));
            $paginationData['current_page'] = DEFAULT_PAGE_INDEX;
            $paginationData['per_page_record'] = $this->perPageRecord;
            $lastPage = ceil($totalRecord/$this->perPageRecord);
            $paginationData['last_page'] = $lastPage;
        }
        
        $whereData['limit'] = $this->perPageRecord;
        $whereData['offset'] = 0;
        
        $recordDetails  = $this->crud_model->getRecordDetails([] , $whereData);
        $data['recordDetails'] = $recordDetails;
        $data['pagination'] = $paginationData;
        $headerData['pageTitle'] = $this->lang->line('city');
        $data['pageTitle'] = $headerData['pageTitle'];
        
        $data['pageNo'] = $page;
        $data['totalRecord'] = $totalRecord;
        $data['cityDetails'] = $this->crud_model->selectData ( CITY_TABLE , [ 'i_id' , 'v_city_name'] , ["t_is_deleted !=" => ACTIVE_STATUS , "order_by" => "v_city_name asc" ]);
        $data['localityDetails'] = $this->crud_model->selectData ( $this->tableName , [ 'i_id' , 'v_locality_name'] , ["t_is_deleted !=" => ACTIVE_STATUS , "order_by" => "v_locality_name  asc" ]);
        $data['newHtml'] = $html;
        $this->loadAdminView($headerData , $this->folderName . "locality" , $data);
        
    }
    
    public function filter(){
        if (!empty($this->input->post())) {
           
            $headerData = $whereData = $data = $paginationData = [];
            $page = (!empty($this->input->post('page')) ? $this->input->post('page') : DEFAULT_PAGE_INDEX);
            
            if(!empty($this->input->post('search_locality'))){
                $whereData['l.i_id'] = $this->anand_electrical->decode($this->input->post('search_locality'));
            }
            
            if(!empty($this->input->post('search_city'))){
                $whereData['l.i_city_id'] = $this->anand_electrical->decode($this->input->post('search_city'));
            }
            
            if(!empty($this->input->post('search_status'))){
                $whereData['l.t_is_active'] = ($this->input->post('search_status') == ACTIVE_STATUS_TEXT ? ACTIVE_STATUS : INACTIVE_STATUS );
            }
//             dd($whereData);
            if($page == DEFAULT_PAGE_INDEX){
              
                $totalRecord = count($this->crud_model->getRecordDetails( [ 'l.i_id'] , $whereData ));
                $paginationData['current_page'] = DEFAULT_PAGE_INDEX;
                $paginationData['per_page_record'] = $this->perPageRecord;
                $lastPage = ceil($totalRecord/$this->perPageRecord);
                $paginationData['last_page'] = $lastPage;
                
                $whereData['limit'] = $this->perPageRecord;
                $whereData['offset'] = 0;
                $data['totalRecord'] = $totalRecord;
                
            }else{
                $whereData['limit'] = $this->perPageRecord;
                $whereData['offset'] = ( $page - 1 )* $this->perPageRecord;
            }
           
            $recordDetails  = $this->crud_model->getRecordDetails([] , $whereData);
            
            $data['recordDetails'] = $recordDetails;
            $data['pagination'] = $paginationData;
            $headerData['pageTitle'] = $this->lang->line('sub-stations');
            $data['pageTitle'] = $headerData['pageTitle'];
            
            $data['pageNo'] = $page;
            
            $html = $this->load->view( AJAX_FOLDER. "locality/locality-list", $data , true);
            echo $html;die;
            
           }
    }
    
    public function showAddForm(){
        
        
        $headerData = $data = [];
        
        $headerData['pageTitle'] = $this->lang->line("add-locality");
        $data['pageTitle'] = $headerData['pageTitle'];
        $data['cityDetails'] = $this->crud_model->selectData(CITY_TABLE , ["i_id" , "v_city_name"] ,  [ "t_is_deleted" => INACTIVE_STATUS , "t_is_active" => ACTIVE_STATUS , "order_by" => "v_city_name"] );

        $this->loadAdminView($headerData, $this->folderName . "add-locality" , $data);
    }
    
    public function add(){
        
        $this->form_validation->set_rules( "locality_name" , $this->input->post("locality-name") , "required" );
        $this->form_validation->set_rules( "city_id" , $this->input->post("city-name") , "required" );
        
        if($this->form_validation->run() != TRUE){
            
            $this->showAddForm();
        }else{
            
            $result = false;
            
            $recordId = (!empty(getPostData('record_id')) ?  $this->anand_electrical->decode( getPostData('record_id')) : 0);
            
            $recordData = [];
            $recordData['v_locality_name'] = uperCaseWord(getPostData('locality_name')) ;
            $recordData['i_city_id'] =  (!empty(getPostData('city_id')) ? $this->anand_electrical->decode(getPostData('city_id')) : 0);
            
            $successMessage = sprintf($this->lang->line("success-create"), $this->lang->line("locality"));
            $errorMessage = sprintf($this->lang->line("error-create"), $this->lang->line("locality"));
           
            
            if($recordId > 0){
                
                $result = $this->crud_model->updateTableData( $this->tableName , $recordData , [ "i_id" => $recordId ] );
                
                $successMessage = sprintf($this->lang->line("success-update"), $this->lang->line("locality"));
                $errorMessage = sprintf($this->lang->line("error-update"), $this->lang->line("locality"));
                
                
            }else{
                
                $insertId = $this->crud_model->insertTableData($this->tableName , $recordData);
                
                if($insertId > 0){
                    $result = true;
                }
                
            }
            
            if($result != false){
                $this->anand_electrical->setFlashMessage( "success" , $successMessage);
            }else{
                $this->anand_electrical->setFlashMessage( "danger" , $errorMessage );
            }
            
            redirect(LOCALITY_URL);
        }
    }
    
    public function showEditForm( $recordId = null ){
        $errorFound = true;
        
        if(!empty($recordId)){
            $recordId = (int)$this->anand_electrical->decode($recordId);
            
            $recordInfo = $this->crud_model->getRecordDetails( [] , [ "l.i_id" => $recordId , "singleRecord" =>  TRUE ] );
            
            if(!empty($recordInfo)){
                
                $errorFound = false;
                
                $headerData = $data = [];
                $headerData['pageTitle'] = $this->lang->line("update-locality");
                $data['cityDetails'] = $this->crud_model->selectData( CITY_TABLE , [ "i_id" , "v_city_name"] , [ "t_is_deleted" => INACTIVE_STATUS , "order_by" => "v_city_name" ] ); 
                $data['recordInfo'] = $recordInfo;
                $this->loadAdminView($headerData, $this->folderName . "add-locality" , $data);
                
            }
        }
        
        if($errorFound != false){
            dd("page not Found");
        }
    }
    
    public function delete( $recordId = null ){
        $errorFound = true;
        
        if(!empty($recordId)){
            $this->removeRecord($this->tableName , $recordId , $this->moduleName);
        }
        
    }
    
    public function statusUpdate(){
        if(!empty($this->input->post())){
            $this->masterStatusUpdate($this->tableName, $this->moduleName);
        }
    }
    
    
}