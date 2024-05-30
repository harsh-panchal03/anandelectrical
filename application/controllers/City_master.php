<?php


class City_master extends  MY_controller{
    
    
    public function __construct(){
       
        parent::__construct();
        
        $this->tableName = CITY_TABLE;
        $this->redirectUrl = CITY_URL;
        $this->folderName = ADMIN_FOLDER."city/";
        $this->perPageRecord = PER_PAGE;
        $this->moduleName = $this->lang->line("city");
        $this->load->model('city_model' , 'crud_model');
        
    }
    
    public function index(){
        
        $headerData = $data = [];
        $paginationData = $whereData = [];
        
        $page = (!empty($this->input->post("page")) ? $this->input->post("page") : DEFAULT_PAGE_INDEX );
        
        if($page == DEFAULT_PAGE_INDEX){
            
            $totalRecord = count($this->crud_model->getRecordDetails( [ 'i_id' ] ));
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
        
        $data['engineerDetails'] = getEngineerDetails();
        $data['subStationDetails'] = getSubStationDetails();
        
        $this->loadAdminView($headerData , $this->folderName . "city" , $data);
        
    }
    
    
    public function showAddForm(){
        
        
        $headerData = $data = [];
        
        $headerData['pageTitle'] = $this->lang->line("add-city");
        $data['pageTitle'] = $headerData['pageTitle'];
        $data['stateDetails'] = getStateDetails();

        $this->loadAdminView($headerData, $this->folderName . "add-city" , $data);
    }
    
    public function add(){
        
        $this->form_validation->set_rules( "city_name" , $this->input->post("city-name") , "required" );
        
        if($this->form_validation->run() != TRUE){
            
            $this->showAddForm();
        }else{
            
            $result = false;
            
            $recordId = (!empty(getPostData('record_id')) ?  $this->anand_electrical->decode( getPostData('record_id')) : 0);
            
            $recordData = [];
            $recordData['v_city_name'] = uperCaseWord(getPostData('city_name'));
            $recordData['i_state_id'] =  (!empty(getPostData('state')) ? $this->anand_electrical->decode(getPostData('state')) : 0);
            
            $successMessage = sprintf($this->lang->line("success-create"), $this->lang->line("city"));
            $errorMessage = sprintf($this->lang->line("error-create"), $this->lang->line("city"));
           
            
            if($recordId > 0){
                
                $result = $this->crud_model->updateTableData( $this->tableName , $recordData , [ "i_id" => $recordId ] );
                
                $successMessage = sprintf($this->lang->line("success-update"), $this->lang->line("city"));
                $errorMessage = sprintf($this->lang->line("error-update"), $this->lang->line("city"));
                
                
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
            
            redirect(CITY_URL);
        }
    }
    
    public function showEditForm( $recordId = null ){
        $errorFound = true;
        
        if(!empty($recordId)){
            $recordId = (int)$this->anand_electrical->decode($recordId);
            
            $recordInfo = $this->crud_model->getRecordDetails( [] , [ "i_id" => $recordId , "singleRecord" =>  TRUE ] );
            
            if(!empty($recordInfo)){
                
                $errorFound = false;
                
                $headerData = $data = [];
                $headerData['pageTitle'] = $this->lang->line("update-city");
                $data['stateDetails'] = getStateDetails();
                $data['recordInfo'] = $recordInfo;
                $this->loadAdminView($headerData, $this->folderName . "add-city" , $data);
                
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