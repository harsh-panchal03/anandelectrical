<?php 


class Description_master_model extends  My_model{
    
    public function __construct(){
        parent::__construct();
        $this->singleRecord = false;
    }
    
    
    public function  getRecordDetails( $selectData = [] , $whereData = [] , $likeData = [] ){
        
        $tableName = DESCRIPTION_DETAILS_MASTER_TABLE . " as dm";
        
        if(empty($selectData)){
            $selectData = [ "*"];
        }
        
        if(isset($whereData['singleRecord']) && $whereData['singleRecord'] != false){
            $this->singleRecord = true;
            unset($whereData['singleRecord']);
        }
        
        $selectData = [ "dm.i_id" , "dm.v_description_details" , "dm.t_is_active"];
        
        $defaultWhere = [ "dm.t_is_deleted" => INACTIVE_STATUS ];
        
        $whereData = array_merge($defaultWhere , $whereData);
        
        if ($this->singleRecord != FALSE){
            $data = $this->getSingleRecordById($tableName , $selectData , $whereData , $likeData);
        }else{
            $data = $this->selectData($tableName , $selectData , $whereData , $likeData);
        }
        
        return $data;
        
    }
    
}

?>