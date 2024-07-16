<?php 

class vendor_master extends MY_controller {
    
    public function __construct(){
        parent::__construct();
        $this->folderName = ADMIN_FOLDER."vendor-master/";
        $this->tableName = VENDOR_MASTER_TABLE;
        $this->redirectUrl = VENDOR_MASTER_URL;
        $this->moduleName = $this->lang->line('vendor');
        $this->load->model('vendor_master_model' , 'crud_model');
    }
    
    public function index(){
        
        $whereData = $paginationData = $data = $headerData = [];
        
        $page = (!empty($this->input->post('page') ) ? $this->input->post('page') : DEFAULT_PAGE_INDEX );
        
        if($page == DEFAULT_PAGE_INDEX){
            
            $totalRecord = count($this->crud_model->getRecordDetails(['i_id']));
            $paginationData['current_page'] = DEFAULT_PAGE_INDEX;
            $paginationData['per_page_record'] = $this->perPageRecord;
            $lastPage = ceil($totalRecord / $this->perPageRecord);
            $paginationData['last_page'] = $lastPage;
        }
        
        $whereData['limit'] = $this->perPageRecord;
        $whereData['offset'] = 0 ;
        
        $recordDetails = $this->crud_model->getRecordDetails( [] , $whereData);
        
        $data['recordDetails'] = $recordDetails;
        $data['pagination'] = $paginationData;
        
        $headerData['pageTitle'] = $this->moduleName;
        $data['pageTitle'] =  $headerData['pageTitle'];
        
        $this->loadAdminView($headerData , $this->folderName."vendor-master" , $data);
        
    }
    public function filter(){
        
    }
    
    public function showAddForm(){
        $headerData = $pageData = $data = [];
        $headerData['pageTitle'] = $this->lang->line("add-vendor");
        $data['pageTitle'] = $headerData['pageTitle'];
        $this->loadAdminView($headerData , $this->folderName."add-vendor-master" , $data );
    }
}

?>