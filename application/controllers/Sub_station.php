<?php


class Sub_station extends MY_controller{
    
    public function __construct(){
        parent::__construct();
        $this->tableName = SUB_STATION_MASTER_TABLE;
        $this->redirectUrl = SUB_STATION_URL;
        $this->folderName = ADMIN_FOLDER."sub-station/";
        $this->perPageRecord = PER_PAGE;
        $this->moduleName = $this->lang->line("sub-station");
        $this->load->model('sub_station_model' , 'crud_model');
    }
    
    public function index(){
        
        $headerData = $data = [];
        $paginationData = $whereData = [];
        
        $page = (!empty($this->input->post("page")) ? $this->input->post("page") : DEFAULT_PAGE_INDEX );
        
        if($page == DEFAULT_PAGE_INDEX){
            
            $totalRecord = count($this->crud_model->getRecordDetails( [ 'sb.i_id' ] ));
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
        $headerData['pageTitle'] = $this->lang->line('sub-stations');
        $data['pageTitle'] = $headerData['pageTitle'];
        
        $data['pageNo'] = $page;
        $data['totalRecord'] = $totalRecord;
        
        $data['engineerDetails'] = getEngineerDetails();
        $data['subStationDetails'] = getSubStationDetails();
        $data['cityDetails'] = $this->crud_model->selectData(CITY_TABLE , ["i_id" , "v_city_name"] , [ "order_by" => "v_city_name" ,  "t_is_deleted" => INACTIVE_STATUS]);
        
        $this->loadAdminView($headerData , $this->folderName . "sub-station" , $data);
        
    }
    
    public function filter(){
        
        $headerData = $data = [];
        $paginationData = $whereData = [];
        
        $page = (!empty($this->input->post("page")) ? $this->input->post("page") : DEFAULT_PAGE_INDEX );
        $searchEngineer = getPostData('search_engineer');
        
        if(!empty($searchEngineer)){
            $whereData['sb.v_engineer_type'] = $searchEngineer;
        }
        if(!empty(getPostData('search_status'))){
            $searchStatus = getPostData('search_status') == ACTIVE_STATUS_TEXT ? ACTIVE_STATUS : INACTIVE_STATUS_TEXT;
            $whereData['sb.t_is_active'] = $searchStatus;
        }
        
        $searchCity = (!empty($this->input->post('search_city')) ? $this->anand_electrical->decode($this->input->post('search_city')) : "");
        
        if(!empty($searchCity)){
            $whereData['sb.i_city_id'] = $searchCity;
        }
       
        if($page == DEFAULT_PAGE_INDEX){
            
            $totalRecord = count($this->crud_model->getRecordDetails( [ 'sb.i_id' ]  , $whereData));
            $paginationData['current_page'] = DEFAULT_PAGE_INDEX;
            $paginationData['per_page_record'] = $this->perPageRecord;
            $lastPage = ceil($totalRecord/$this->perPageRecord);
            $paginationData['last_page'] = $lastPage;
        }
        
        if($page == DEFAULT_PAGE_INDEX){
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
        
        $html = $this->load->view( AJAX_FOLDER. "sub-station/sub-station-list", $data , true);
        echo $html;die;
    }
    
    public function add(){
        
        $this->form_validation->set_rules( "pin_code" , $this->input->post("pin-code") , "required" );
        
        if($this->form_validation->run() != TRUE){
           
           $this->showAddForm();
        }else{
            
            $result = false;
            $recordId = (!empty(getPostData('record_id')) ? (int)$this->anand_electrical->decode(getPostData('record_id')) : 0);
            
            $successMessage = sprintf($this->lang->line("success-create"), $this->lang->line("sub-station"));
            $errorMessage = sprintf($this->lang->line("error-create"), $this->lang->line("sub-station"));
            
            $recordData = [];
           
            $recordData['v_engineer_type'] = getPostData('sub_station_engineer');
            $recordData['v_sub_station_kv'] = (!empty(getPostData('sub_station_kv')) ? $this->anand_electrical->decode( getPostData('sub_station_kv') ) : null );
            $recordData['i_city_id'] = (!empty(getPostData('city_id')) ? $this->anand_electrical->decode( getPostData('city_id') ) : null );
            $recordData['i_locality_id'] = (!empty(getPostData('locality_id')) ? $this->anand_electrical->decode( getPostData('locality_id') ) : null );
            $recordData['v_pin_code'] = getPostData('pin_code');
            $recordData['v_sub_station_group'] = getPostData('additional_details');
            
            if($recordId > 0){
                
                $successMessage = sprintf($this->lang->line("success-update"), $this->lang->line("sub-station"));
                $errorMessage = sprintf($this->lang->line("error-update"), $this->lang->line("sub-station"));
                $result = $this->crud_model->updateTableData(  $this->tableName , $recordData , [ "i_id" => $recordId ] );
            }else{
                $insertId = $this->crud_model->insertTableData( $this->tableName , $recordData  );
                
                if($insertId > 0){
                    $result = true;
                }
                
            }
            
            if($result != false){
                $this->anand_electrical->setFlashMessage( "success" , $successMessage);
            }else{
                $this->anand_electrical->setFlashMessage( "danger" , $errorMessage );
            }
            
            redirect(SUB_STATION_URL);
        }
    }
    
    
    public function showAddForm(){
        
           $headerData = $data = [];
           
           $headerData['pageTitle'] = $this->lang->line("add-sub-station");
           $data['engineerDetails'] = getEngineerDetails();
           $data['subStationDetails'] = getSubStationDetails();
           $data['localityDetails'] = $this->crud_model->selectData(LOCALITY_TABLE , ["i_id" , "v_locality_name"] , [ "order_by" => "v_locality_name" , "t_is_active" =>  ACTIVE_STATUS , "t_is_deleted" => INACTIVE_STATUS]);
           $data['cityDetails'] = $this->crud_model->selectData(CITY_TABLE , ["i_id" , "v_city_name"] , [ "order_by" => "v_city_name" , "t_is_active" =>  ACTIVE_STATUS , "t_is_deleted" => INACTIVE_STATUS]);
           
           $this->loadAdminView($headerData, $this->folderName . "add-sub-station" , $data);
    }
    
    public function showEditForm( $recordId = null ){
        $errorFound = true;
        
        if(!empty($recordId)){
            $recordId = (int)$this->anand_electrical->decode($recordId);
            
            $recordInfo = $this->crud_model->getRecordDetails( [] , [ "sb.i_id" => $recordId , "singleRecord" =>  TRUE ] );
           
            if(!empty($recordInfo)){
                
                $errorFound = false;
                
                $headerData = $data = [];
                
                $data['localityDetails'] = $this->crud_model->selectData(LOCALITY_TABLE , ["i_id" , "v_locality_name"] , [ "order_by" => "v_locality_name" , "t_is_active" =>  ACTIVE_STATUS , "t_is_deleted" => INACTIVE_STATUS]);
                $data['cityDetails'] = $this->crud_model->selectData(CITY_TABLE , ["i_id" , "v_city_name"] , [ "order_by" => "v_city_name" , "t_is_active" =>  ACTIVE_STATUS , "t_is_deleted" => INACTIVE_STATUS]);
                
                $headerData['pageTitle'] = $this->lang->line("update-sub-station");
                $data['engineerDetails'] = getEngineerDetails();
                $data['subStationDetails'] = getSubStationDetails();
              
                $data['recordInfo'] = $recordInfo;
                $this->loadAdminView($headerData, $this->folderName . "add-sub-station" , $data);
                
            }
        }
        
        if($errorFound != false){
            dd("page not Found");
        }
    }
    
    public function delete( $recordId = null ){
        $errorFound = true;
        
        if(!empty($recordId)){
            $errorFound = false;
            $this->removeRecord($this->tableName , $recordId , $this->moduleName);
        }
        
        if($errorFound != false){
            dd("Page NOt Found");
        }
    }
    
    public function statusUpdate(){
        if(!empty($this->input->post())){
            $this->masterStatusUpdate($this->tableName, $this->moduleName);
        }
    }
    
}