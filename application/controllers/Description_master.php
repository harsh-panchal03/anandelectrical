<?php

class Description_master extends  MY_controller {
    
    public function __construct(){
        
        parent::__construct();
        
        $this->tableName = DESCRIPTION_DETAILS_MASTER_TABLE;
        $this->redirectUrl = DESCRIPTION_DETAILS_MASTER_URL;
        $this->folderName = ADMIN_FOLDER."description/";
        $this->perPageRecord = PER_PAGE;
        $this->moduleName = $this->lang->line("description");
        
        $this->load->model("description_master_model" , "crud_model");
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
        $headerData['pageTitle'] = $this->lang->line('description');
        $data['pageTitle'] = $headerData['pageTitle'];
        
        $data['pageNo'] = $page;
        $data['totalRecord'] = $totalRecord;
        
        $data['engineerDetails'] = getEngineerDetails();
        $data['subStationDetails'] = getSubStationDetails();
        
        $this->loadAdminView($headerData , $this->folderName . "description" , $data);
        
    }
    
    
    public function filter(){
       
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
        $headerData['pageTitle'] = $this->lang->line('description');
        $data['pageTitle'] = $headerData['pageTitle'];
        
        $data['pageNo'] = $page;
        
        $html = $this->load->view( AJAX_FOLDER. "description/description-list", $data , true);
        echo $html;die;
    }
    
    public function showAddForm(){
        
        
        $headerData = $data = [];
        
        $headerData['pageTitle'] = $this->lang->line("add-description");
        $data['pageTitle'] = $headerData['pageTitle'];
        $data['stateDetails'] = getStateDetails();
        
        $this->loadAdminView($headerData, $this->folderName . "add-description" , $data);
    }
    
    public function add(){
        
        $this->form_validation->set_rules( "description" , $this->input->post("description") , "required" );
        
        if($this->form_validation->run() != TRUE){
            
            $this->showAddForm();
        }else{
            
            $result = false;
            
            $recordId = (!empty(getPostData('record_id')) ?  $this->anand_electrical->decode( getPostData('record_id')) : 0);
            
            $recordData = [];
            $recordData['v_description_details'] = uperCaseWord(getPostData('description'));
            
            $successMessage = sprintf($this->lang->line("success-create"), $this->lang->line("description"));
            $errorMessage = sprintf($this->lang->line("error-create"), $this->lang->line("description"));
            
            
            if($recordId > 0){
                
                $result = $this->crud_model->updateTableData( $this->tableName , $recordData , [ "i_id" => $recordId ] );
                
                $successMessage = sprintf($this->lang->line("success-update"), $this->lang->line("description"));
                $errorMessage = sprintf($this->lang->line("error-update"), $this->lang->line("description"));
                
                
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
            
            redirect($this->redirectUrl);
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
                $headerData['pageTitle'] = $this->lang->line("update-description");
                $data['stateDetails'] = getStateDetails();
                $data['recordInfo'] = $recordInfo;
                $this->loadAdminView($headerData, $this->folderName . "add-description" , $data);
                
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