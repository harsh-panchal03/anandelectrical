<?php 
require("application/controllers/Guest.php");

class MY_controller extends Guest{
    public function __construct(){
        parent::__construct();
        
        if($this->session->has_userdata("userId") != true && empty($this->session->userdata("userId"))){
            redirect(LOGIN_URL);
        }
    }

    
    public function loadAdminView( $headerData = [], $pageName = "" , $pageData = [], $footerData = []){
             
       $this->load->view(ADMIN_FOLDER.'layouts/header' , $headerData);
       $this->load->view($pageName , $pageData);
       $this->load->view(ADMIN_FOLDER.'layouts/footer' , $footerData);

    }
    
    public function ajaxResponse( $statusCode , $message , $data = null ){
        
        $response = [];
        $response['status_code'] = $statusCode;
        $response['message'] = $message;
        
        if(!empty($data)){
            $response['data'] = $data;
        }
        
        echo json_encode($response);die;
        
    }
    
    public function masterStatusUpdate( $tableName ,$moduleName){
       
        if(getPostData('record_id')){
            
            $statusCode = ERROR_AJAX_CALL;
            $recordId = (int)$this->anand_electrical->decode( getPostData('record_id') );
            $status = getPostData('status');
            $result = false;
            
            if(!empty($status)){
                switch ($status){
                    case ACTIVE_STATUS_TEXT :
                       $doStatus = ACTIVE_STATUS;
                       $changeStatus = $this->lang->line("active");
                       break;
                    case INACTIVE_STATUS_TEXT :
                       $doStatus = INACTIVE_STATUS;
                       $changeStatus = $this->lang->line("inactive");
                       break;
                    default:
                       break;
                } 
                $result = $this->my_model->updateTableData( $tableName , [ 't_is_active' => $doStatus ] , [ 'i_id'  => $recordId] );
            }
           
            if($result != false){
                $message =  sprintf($this->lang->line('success-update-status') ,$moduleName , $changeStatus ); 
                $statusCode = SUCCESS_AJAX_CALL;
            }else{
                $message = sprintf($this->lang->line("error-update-status"),$changeStatus , $moduleName );
                $statusCode = ERROR_AJAX_CALL;
            }
            $this->ajaxResponse($statusCode,$message );
        }
        $this->ajaxResponse(ERROR_AJAX_CALLr, $this->lang->line("system-error"));
    }
    
    public function removeRecord( $tableName , $recordId , $moduleName){
        
        if(!empty($tableName)){
            
            $recordId = (int)$this->anand_electrical->decode($recordId);
            
            $result = $this->my_model->deleteTableData( $tableName , [] , [ "i_id" => $recordId ] );
            if($result != false){
                $message = sprintf($this->lang->line("success-delete"), $moduleName);
                $this->anand_electrical->setFlashMessage( "success" , $message );
            }else{
                $message = sprintf($this->lang->line("error-delete"), $moduleName);
                $this->anand_electrical->setFlashMessage("danger" , $message);            }
            
        }
        
        redirect($this->redirectUrl);
        
    }
    
    
}