<?php

class Login extends Guest {
    public function __construct() {
        parent::__construct();
        
        if($this->session->has_userdata("userId") != false && !empty($this->session->userdata("userId"))){
            redirect(DASHBOARD_URL);
        }
        
        
        $this->load->model("login_model" , "crud_model");
    }


    public function index(){
        
        

    $this->load->view('login/login');
    }

    public function showAddForm(){
        echo "hi0;";
    }

    public function checkAdminLogin(){
        
        
        
        if(!empty($this->input->post())){
            
            $this->form_validation->set_rules('login_email' , $this->lang->line('email') , 'trim|required|xss_clean');
            $this->form_validation->set_rules('login_password' , $this->lang->line('password') , 'trim|required|xss_clean');

            if($this->form_validation->run() != true){
                print_r(validation_errors());
            } else{
                
                $message = $this->lang->line("email-not-exist");
               
                
                $email = (!empty($this->input->post("login_email")) ? $this->input->post("login_email") : "");
                $password = (!empty($this->input->post("login_password")) ? $this->input->post("login_password") : "");

                
                if(!empty($email)){
                    $checkLogin = $this->crud_model->getRecordDetails ( [] , [ "v_email" => $email ]);
                    
                    if(!empty($checkLogin)){

                        if( isset($checkLogin->t_is_active) && $checkLogin->t_is_active != ACTIVE_STATUS){
                            $message = $this->lang->line("inactive-account");
                        }
                        
                        $verifyPassword = password_verify( $password , $checkLogin->v_password );
                        
                        if($verifyPassword != false){
                            $this->commonSessionEntry($checkLogin);
                            redirect(DASHBOARD_URL);
                        }
                    }
                 }
                 
                 $this->anand_electrical->setFlashMessage( "danger" , $message );
            }
        }
        redirect(LOGIN_URL);
    }

}