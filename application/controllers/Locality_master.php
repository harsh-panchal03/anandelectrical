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
        
      
        
        $this->loadAdminView($headerData , $this->folderName . "locality" , $data);
        
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