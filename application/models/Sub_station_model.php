<?php

class Sub_station_model extends My_model{
    
    public function __construct(){
        parent::__construct();
        $this->singleRecord = false;
        
    }
    
    public function getRecordDetails(  $selectData = [] , $whereData = [] , $likeData = [] , $additionalData = [] ){
        
        $tableName = SUB_STATION_MASTER_TABLE ." as sb";
        
        if(empty($selectData)){
            $selectData = [
                
                'sb.i_id',
                'sb.i_locality_id',
                'sb.i_city_id',
                'sb.v_engineer_type',
                'c.v_city_name',
                'l.v_locality_name',
                'sb.t_is_active',
                'sb.v_pin_code',
                'sb.v_sub_station_kv',
                'sb.v_sub_station_group',
                
            ];
        }
        
        if(isset($whereData['singleRecord']) && $whereData['singleRecord'] != false){
            $this->singleRecord = true;
            unset($whereData['singleRecord']);
        }
        
        
        $joinData = [
                [
                    'tableName' => LOCALITY_TABLE. " as l",
                    'condition' => "l.i_id = sb.i_locality_id",
                    'type' => "left",
                ],
                [
                    'tableName' => CITY_TABLE . " as c",
                    'condition' => "c.i_id = sb.i_city_id",
                    'type' => "left",
                ]
        ];
        
        $defaultWhere = [];
        $defaultWhere['sb.t_is_deleted'] = INACTIVE_STATUS;
        
        $whereData = array_merge($defaultWhere , $whereData);
        
        $data = [];
        
        if($this->singleRecord != false){
            $data = $this->getSingleRecordWithJoinById($tableName , $selectData , $joinData , $whereData );
        }else{
            $data = $this->selectJoinData($tableName , $selectData , $joinData , $whereData);
        }
        
        return $data;
    }
}