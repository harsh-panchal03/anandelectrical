<?php

class Vendor_master_model extends My_model{
    public function __construct(){
        parent::__construct();
        $this->singleRecord = false;
    }
    public function getRecordDetails ( $selectData = [] , $whereData = [] , $likeData = [], $addititonalData = []){
        
        if(empty($selectData)){
           
            $selectData = [ 
                            "i_id",
                            "v_vendor_name" ,
                            "v_vendor_number" ,
                            "v_vendor_gst_number" , 
                            "v_vendor_address" ,
                            "v_vendor_pay_out" , 
                            "v_vendor_pay_in" ,
                            "v_vendor_person_name" ,
                            "t_is_active",
                
            ];
        }
        
        if(isset($whereData['singleRecord']) && $whereData['singleRecord'] != false){
            $this->singleRecord = TRUE;
        }
        
        if($this->singleRecord != FALSE){
            $data = $this->getSingleRecordById(VENDOR_MASTER_TABLE , $selectData , $whereData , $likeData , $addititonalData);
        }else {
            $data = $this->selectData(VENDOR_MASTER_TABLE , $selectData , $whereData , $likeData , $addititonalData);
        }
        
        return $data;
    }
}