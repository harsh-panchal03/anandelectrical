<?php 

class Dashboard extends MY_controller{
    
    
    public function __construct(){
        parent::__construct();
        $this->folderName = ADMIN_FOLDER."dashboard/";
        $this->moduleName = $this->lang->line("dashboard");
    }
    
    public function index(){
        
        $data = $headerData =  [];
        $data['pageTitle'] = $this->moduleName;
        $headerData = $data['pageTitle'];
        $this->loadAdminView( $headerData , $this->folderName."dashboard" );
    }
    
    
    
}


?>