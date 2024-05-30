<?php 

class login_model extends My_model{

    public function __construct(){
        parent::__construct();
        
    }

    public function getRecordDetails( $selectData = [] , $whereData = [] , $likeData = [] , $additionalData = []  ){

        $data = [];

        if(isset($whereData['singleRecord']) && $whereData['singleRecord'] != false){
            $this->singleRecord = true;
        }


        if(empty($selectData)){
            $selectData = [
                'i_id',
                'v_email',
                'v_name',
                'e_role',
                'v_password',
                'v_mobile',
                't_is_active',
            ];
        }

        if($this->singleRecord != false){
            $data = $this->selectData(LOGIN_TABLE , $selectData , $whereData , $likeData , $additionalData );
        }else{ 
            $data = $this->getSingleRecordById( LOGIN_TABLE ,$selectData , $whereData , $likeData , $additionalData );
        }


        return $data;


    }

}