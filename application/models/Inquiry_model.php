<?php
class Inquiry_model extends My_model{
    
    
    
    public function __construct(){
        parent::__construct();
        $this->singleRecord = false;
    }
    
    
    
    
    
    public function getInquryDetails( $selectData = [] ,$whereData = []  , $likeData = [] ){
        
        
        $tableName = INQUIRY_MASTER_TABLE ." as im";
        
        
        if( isset($whereData['singleRecord']) && $whereData['singleRecord'] != false ){
            $this->singleRecord = TRUE;
            unset($whereData['singleRecord']);
        }
        
        if(empty($selectData)){
        
        $selectData = [
            'im.i_id',
            'im.v_inquiry_number',
            'im.i_sub_station_id',
            'im.e_order_company',
            'im.v_inquiry_company',
            'im.t_is_active',
            'sb.v_sub_station_kv',
            'UPPER(sb.v_engineer_type) as engineer',
            'l.v_locality_name',
            'c.v_city_name',
            'CONCAT(sb.v_sub_station_kv , " KV " , UPPER(sb.v_engineer_type) , "," ,l.v_locality_name , " " , c.v_city_name ) as locality',
            'im.dt_unnati_inquiry_date',
            'im.dt_anand_inquiry_date',
            'im.dt_bhavesh_inquiry_date',
            
        ];
        
        }
        
        $joinData = [
            [
                'tableName' => SUB_STATION_MASTER_TABLE. " as sb",
                'condition' => "im.i_sub_station_id = sb.i_id and sb.t_is_active = ".ACTIVE_STATUS."",
            ],
           
            [
                'tableName' => LOCALITY_TABLE. " as l",
                'condition' => "l.i_id = sb.i_locality_id and l.t_is_active = ".ACTIVE_STATUS."",
            ],
            [
                'tableName' => CITY_TABLE . " as c",
                'condition' => "c.i_id = sb.i_city_id and c.t_is_active = ". ACTIVE_STATUS ."",
            ],
        ];
        
        
        $defaultWhere = [];
        $defaultWhere['im.t_is_deleted'] = INACTIVE_STATUS;
        $defaultWhere['order_by'] = " im.i_id desc";
        
        $whereData = array_merge($defaultWhere , $whereData);
        
        if($this->singleRecord != false){
            $data = $this->getSingleRecordWithJoinById($tableName , $selectData , $joinData , $whereData);
        }else{
            $data = $this->selectJoinData($tableName , $selectData , $joinData , $whereData);
        }
        
        
        
        return $data;
        
        
    }
    
    public function  getDescriptionDetails( $whereData = [] , $likeData = [] ){
        
        $tableName = INQUIRY_DESCRIPTION_DETAILS_TABLE ." as inq";
        
        $selectData = [
            
            "inq.i_id",
            "inq.v_anand_rate",
            "inq.v_unnati_rate",
            "inq.i_description_id",
            "inq.v_bhavesh_rate",
            "inq.v_unit",
            "ds.v_description_details",
            
        ];
        
        $joinData = [
          
            [
                'tableName' => DESCRIPTION_DETAILS_MASTER_TABLE. " as ds",
                'condition' => "inq.i_description_id = ds.i_id and ds.t_is_active = ".ACTIVE_STATUS."",
            ],
           
        ];
        
        if( isset($whereData['singleRecord']) && $whereData['singleRecord'] != false ){
            $this->singleRecord = TRUE;
            unset($whereData['singleRecord']);
        }else{
            $this->singleRecord = false;
        }
        
        
        if($this->singleRecord != false){
           
            $data = $this->getSingleRecordWithJoinById($tableName  , $selectData , $joinData , $whereData);
        }else{
            $data = $this->selectJoinData($tableName , $selectData , $joinData , $whereData);
        }
        return $data;
    }
    
    public function getSubStationDetails( $whereData = []  , $likeData = [] ){
       
        
        $tableName = SUB_STATION_MASTER_TABLE ." as sb";
        
       
            $selectData = [
                'sb.i_id',
                'CONCAT(sb.v_sub_station_kv , " KV " , UPPER(sb.v_engineer_type) , "," ,l.v_locality_name , " " , c.v_city_name ) as locality',
                'sb.v_engineer_type',
                'sb.v_sub_station_kv',
                'sb.i_locality_id',
                'sb.i_city_id',
                'sb.v_sub_station_group',
                
            ];
        
        
        
        $joinData = [
            [
                'tableName' => LOCALITY_TABLE. " as l",
                'condition' => "l.i_id = sb.i_locality_id and l.t_is_active = ".ACTIVE_STATUS."",
//                 'type' => "left",
            ],
            [
                'tableName' => CITY_TABLE . " as c",
                'condition' => "c.i_id = sb.i_city_id and c.t_is_active = ". ACTIVE_STATUS ."",
//                 'type' => "left",
            ]
        ];
       
        $data = $this->selectJoinData($tableName , $selectData , $joinData , $whereData);
        
        
        return $data;
        
        
    }
    
    
}