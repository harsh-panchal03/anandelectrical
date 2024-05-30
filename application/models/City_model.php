<?php


class City_model extends My_model{
    
    public function __construct(){
        parent::__construct();
        $this->singleRecord = false;
        
    }
    
    public function getRecordDetails(  $selectData = [] , $whereData = [] , $likeData = [] , $additionalData = [] ){
        
        $tableName = CITY_TABLE ." as c";
        
        if(empty($selectData)){
            $selectData = [
                'c.i_id',
                'c.i_state_id',
                'c.v_city_name',
                'c.t_is_active',
                
            ];
        }
        
        if(isset($whereData['singleRecord']) && $whereData['singleRecord'] != false){
            $this->singleRecord = true;
            unset($whereData['singleRecord']);
        }
        
        $defaultWhere = [];
        $defaultWhere['t_is_deleted'] = INACTIVE_STATUS;
        
        $whereData = array_merge($defaultWhere , $whereData);
        
        $data = [];
        
        if($this->singleRecord != false){
            $data = $this->getSingleRecordById($tableName , $selectData , $whereData );
        }else{
            $data = $this->selectData($tableName , $selectData , $whereData);
        }
        
        return $data;
    }
}