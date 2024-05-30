<?php


class Locality_model extends My_model{
    
    public function __construct(){
        parent::__construct();
        $this->singleRecord = false;
        
    }
    
    public function getRecordDetails(  $selectData = [] , $whereData = [] , $likeData = [] , $additionalData = [] ){
        
        $tableName = LOCALITY_TABLE ." as l";
        
        if(empty($selectData)){
            $selectData = [
                'l.i_id',
                'l.i_city_id',
                'l.v_locality_name',
                'c.v_city_name',
                'l.t_is_active',
                
            ];
        }
        
        $joinData = [
                [ 
                    'tableName' => CITY_TABLE . " as c",
                    'condition' => "c.i_id = l.i_city_id",
                    'type' => "left",
                ]
        ];
        
        if(isset($whereData['singleRecord']) && $whereData['singleRecord'] != false){
            $this->singleRecord = true;
            unset($whereData['singleRecord']);
        }
        
        $defaultWhere = [];
        $defaultWhere['l.t_is_deleted'] = INACTIVE_STATUS;
        
        $whereData = array_merge($defaultWhere , $whereData);
        
        $data = [];
        
        if($this->singleRecord != false){
            $data = $this->getSingleRecordWithJoinById($tableName , $selectData , $joinData , $whereData , $likeData);
        }else{
            $data = $this->selectJoinData($tableName , $selectData , $joinData , $whereData , $likeData);
        }
        
        return $data;
    }
}