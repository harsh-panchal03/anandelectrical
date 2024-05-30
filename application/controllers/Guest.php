<?php

class Guest extends CI_Controller{
    
    public $tableName;
    public $folderName ;
    public $redirectUrl;
    public $perPageRecord;
    
    
    public function __construct(){
        parent::__construct();
        $this->tableName = "";
        $this->folderName ="";
        $this->redirectUrl = "";
        $this->perPageRecord = PER_PAGE;
        
    }

    public function guestObject(){
        echo "guest function called"; die;
    }
    
    public function commonSessionEntry($checkLogin){
       
        if(!empty($checkLogin)){
           
            $userData = [];
            $userData['userName'] = (!empty($checkLogin->v_name) ? $checkLogin->v_name : "");
            $userData['role'] = (!empty($checkLogin->v_role) ? $checkLogin->v_name :"");
            $userData['userId'] = (!empty($checkLogin->i_id) ? $checkLogin->i_id : "");
            $userData['userEmail'] = (!empty($checkLogin->v_email) ? $checkLogin->v_email : "");
            
            $this->session->set_userdata($userData);
            
        }
    }

    
}