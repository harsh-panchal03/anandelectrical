<?php
class My_model extends CI_Model {
   public $loggedUserId;
   public $loggedUserRole;
   public $loggedUserName;
   public $loggedUserBusinessType;
   public $permissions;
   public $singleRecord;
   
   public function __construct(){
		parent::__construct();
		$this->singleRecord = false;
		$this->loggedUserId = ( ( !empty( $this->session->userdata('user_id') ) ) ? $this->session->userdata('user_id') : 9999 );
		$this->loggedUserRole = $this->session->userdata('role');
		$this->loggedUserName = $this->session->userdata('name');
		$allPermissions = [];//$this->getSingleRecordById( LOGIN_TABLE, ['i_id','v_name','v_email','t_is_active','v_email','v_role','v_mobile','v_permission' ], [ 'i_id' => $this->loggedUserId  ]);
		//$this->permissions =  !empty($allPermissions) ?  explode(",",$allPermissions->v_permission) : [];
	}


	public function errorLogEntry($data)
	{
		if (! file_exists ( APPPATH . 'custom-log/'  )) {
			mkdir ( APPPATH . 'custom-log/' , 0777, true );
		}
		
		$fileName = APPPATH . 'custom-log/customer-log-'.date('Y-m-d').'.php' ;
		
		if (file_exists($fileName)) {
			$fh = fopen($fileName, 'a');
		} else {
			$fh = fopen($fileName, 'w');
		}
		fwrite($fh, print_r($data,true)."\n");
		return false;
	}
	
	
	protected function insertDateTimeData() {
		$result ['i_created_id'] = $this->loggedUserId;
		$result ['dt_created_at'] = DATE_TIME;
		$result['v_ip'] = $this->input->ip_address();
		return $result;
	}
	
	public function updateDateTimeData() {
		$result ['i_updated_id'] = $this->loggedUserId;
		$result ['dt_updated_at'] = DATE_TIME;
		$result['v_ip'] = $this->input->ip_address();
		return $result;
	}
	
	protected function deleteDateTimeData() {
		$result ['i_deleted_id'] = $this->loggedUserId;
		$result ['dt_deleted_at'] = DATE_TIME;
		$result ['t_is_active'] = 0;
		$result ['t_is_deleted'] = 1;
		$result['v_ip'] = $this->input->ip_address();
		return $result;
	}
	public  function insertTableData($tableName,$insertData){
		
		$recordId = 0;
		try{
			
			if (! empty ( $insertData )) {
				$insertData = array_merge (  $this->insertDateTimeData () , $insertData );
				$result = $this->db->insert ( $tableName, $insertData );
				$db_error = $this->db->error();
					
				if ( (!empty($db_error)) && ($db_error['code'] > 0 ) && (!empty($db_error['message']))) {
					$this->errorLogEntry(['action' => 'select query' , 'data' => $db_error ] );
					return $recordId;
				}
				
				if ($result) {
					$recordId = (int) $this->db->insert_id ();
				}
			}
			
			
		}catch(Exception $e){
			$this->errorLogEntry(['action' => 'insert query' , 'data' => json_encode($insertData) , 'error_message' => $e->getMessage() , 'file' => $e->getFile() , 'line' => $e->getLine()]);
		}
	   
	    return $recordId;
	}
	
	public  function updateTableData($tableName,$updateData,$whereData){
	
	    $result = false;
	
	    
	    try{
	    	if(!empty($whereData)){
	    		foreach($whereData as $key=>$value){
	    			switch($key){
	    				case 'where_in':
	    					$this->db->where_in($value[0],$value[1]);
	    					break;
	    				default:
	    					$this->db->where($key,$value);
	    					
	    			}
	    		}
	    	
	    		$updateData = array_merge ( $this->updateDateTimeData ()  , $updateData );
	    	
	    		$result = $this->db->update ( $tableName, $updateData );
	    		
	    		$db_error = $this->db->error();
	    			
	    		if ( (!empty($db_error)) && ($db_error['code'] > 0 ) && (!empty($db_error['message']))) {
	    			$this->errorLogEntry(['action' => 'update query' , 'data' => $db_error ] );
	    			return $result;
	    		}
	    		
	    	}
	    }catch(Exception $e){
	    	$this->errorLogEntry(['action' => 'select query' , 'data' => json_encode($updateData) , 'error_message' => $e->getMessage() , 'file' => $e->getFile() , 'line' => $e->getLine()]);
	    }
		return $result;
	}
	
	public  function deleteTableData($tableName,$updateData,$whereData){
	
	    $result = false;
	
	    try{
	    	if(!empty($whereData)){
	    		foreach($whereData as $key=>$value){
	    			switch($key){
	    				case 'where_in':
	    					$this->db->where_in($value[0],$value[1]);
	    					break;
	    				default:
	    					$this->db->where($key,$value);
	    					
	    			}
	    		}
	    	
	    		$updateData = array_merge ( $this->deleteDateTimeData ()  ,  $updateData  );
	    	
	    	    $result = $this->db->update ( $tableName, $updateData );
	    		
	    		$db_error = $this->db->error();
	    		
	    		if ( (!empty($db_error)) && ($db_error['code'] > 0 ) && (!empty($db_error['message']))) {
	    			$this->errorLogEntry(['action' => 'select query' , 'data' => $db_error ] );
	    			return $result;
	    		}
	    	}
	    }catch(Exception $e){
	    	$this->errorLogEntry(['action' => 'select query' , 'data' => json_encode($updateData) , 'error_message' => $e->getMessage() , 'file' => $e->getFile() , 'line' => $e->getLine()]);
	    }
	    
	
	    return $result;
	}
	
	
	public  function getSingleRecordById($tableName,$selectColumns = [],$whereData = [] , $likeData = [] , $additionData = [] ){
	    $result = [];
	    
	    try{
	    	$select = "";
	    	if(!empty($selectColumns)){
	    		foreach($selectColumns as $column){
	    			$select  .= $column.',';
	    		}
	    		$select = rtrim($select);
	    	} else {
	    		$select = "*";
	    	}
	    	
	    	
	    	
	    	$this->db->select($select);
	    	$this->db->from ( $tableName );
	    	
	    	 
	    	if(!empty($whereData)){
	    		foreach($whereData as $key=>$value){
	    			switch($key){
	    				case 'limit':
	    					$this->db->limit ($value);
	    					break;
	    				case 'offset':
	    					$this->db->offset ($value);
	    					break;
	    				case 'group_by':
	    					$this->db->group_by ($value);
	    					break;
	    				case 'having':
	    					$this->db->having ($value[0],$value[1]);
	    					break;
    					case 'custom':
    						if(is_array($value)){
    							foreach($value as $val){
    								$this->db->where ($val);
    							}
    						} else {
    							$this->db->where ($value);
    						}
    						break;
    					case 'find_in_set':
	                   		 if(is_array($value[1])){
	                         	foreach($value[1] as $va){
	                         		if(!empty($va)){
	                         			$findInSetWhere = "FIND_IN_SET('".$va."', ".$value[0].")";
	                         			$this->db->where($findInSetWhere);
	                         		}
	                         	}
	                         } else {
	                         	$findInSetWhere = "FIND_IN_SET('".$value[1]."', ".$value[0].")";
	                         	$this->db->where($findInSetWhere);
	                         }
	                         break;
    					case 'order_by':
	    					$this->db->order_by ($value);
	    					break;
	    				default:
	    					$this->db->where($key,$value);
	    			}
	    			 
	    		}
	    	}
	    	
	    	if(!empty($additionData)){
	    		$this->db->group_start();
	    		if (isset($additionData ["where"])) {
	    			foreach ($additionData ["where"] as $keyIn => $valueIn) {
	    				$this->db->where($keyIn, $valueIn);
	    			}
	    		}
	    	
	    		if (isset($additionData ["where_in"])) {
	    			foreach ($additionData ["where_in"] as $keyIn => $valueIn) {
	    				$this->db->where_in($keyIn, $valueIn);
	    			}
	    		}
	    	
	    		if (isset($additionData ["where_not_in"])) {
	    			foreach ($additionData ["where_not_in"] as $keyNotIn => $valueNotIn) {
	    				$this->db->where_not_in($keyNotIn, $valueNotIn);
	    			}
	    		}
	    	
	    		if (isset($additionData ["or_where"])) {
	    			//$this->db->group_start();
	    			foreach ($additionData ["or_where"] as $keyOr => $valueOr) {
	    				$this->db->or_where($keyOr, $valueOr);
	    			}
	    			//$this->db->group_end();
	    		}
	    		$this->db->group_end();
	    	}
	    	
	    	$query = $this->db->get ();
	    	
	    	$db_error = $this->db->error();
	    	
	    	if ( (!empty($db_error)) && ($db_error['code'] > 0 ) && (!empty($db_error['message']))) {
	    		$this->errorLogEntry(['action' => 'select query' , 'data' => $db_error ] );
	    		return $result;
	    	}
	    	
	    	
	    	$result = $query->row ();
	    	return $result;
	    }catch(Exception $e){
	    	$this->errorLogEntry(['action' => 'select single query' , 'data' => '' , 'error_message' => $e->getMessage() , 'file' => $e->getFile() , 'line' => $e->getLine()]);
	    }
		return $result;
	}
	
	public  function getSingleRecordWithJoinById($tableName,$selectColumns = [],$joinData = [],$whereData = [] , $likeData = [] , $additionData = []){
	    $result = [];
	    
	    
	    try{
	    	$select = "";
	    	if(!empty($selectColumns)){
	    		foreach($selectColumns as $column){
	    			$select  .= $column.',';
	    		}
	    		$select = rtrim($select);
	    	} else {
	    		$select = "*";
	    	}
	    	
	    	
	    	
	    	$this->db->select($select);
	    	$this->db->from ( $tableName );
	    	
	    	
	    	if(!empty($joinData)){
	    		foreach($joinData as $joinInfo){
	    			$this->db->join($joinInfo['tableName'], $joinInfo['condition'] , (!empty($joinInfo['type']) ? $joinInfo['type'] : ''));
	    		}
	    	}
	    	
	    if(!empty($whereData)){
	    		foreach($whereData as $key=>$value){
	    			switch($key){
	    				case 'limit':
	    					$this->db->limit ($value);
	    					break;
	    				case 'offset':
	    					$this->db->offset ($value);
	    					break;
	    				case 'group_by':
	    					$this->db->group_by ($value);
	    					break;
	    				case 'having':
	    					$this->db->having ($value[0],$value[1]);
	    					break;
    					case 'custom':
    						if(is_array($value)){
    							foreach($value as $val){
    								$this->db->where ($val);
    							}
    						} else {
    							$this->db->where ($value);
    						}
    						break;
    					case 'find_in_set':
	                   		 if(is_array($value[1])){
	                         	foreach($value[1] as $va){
	                         		if(!empty($va)){
	                         			$findInSetWhere = "FIND_IN_SET('".$va."', ".$value[0].")";
	                         			$this->db->where($findInSetWhere);
	                         		}
	                         	}
	                         } else {
	                         	$findInSetWhere = "FIND_IN_SET('".$value[1]."', ".$value[0].")";
	                         	$this->db->where($findInSetWhere);
	                         }
	                         break;
    					case 'order_by':
	    					$this->db->order_by ($value);
	    					break;
	    				default:
	    					$this->db->where($key,$value);
	    			}
	    			 
	    		}
	    	}
	    	 
	    	if(!empty($additionData)){
	    		$this->db->group_start();
	    		if (isset($additionData ["where"])) {
	    			foreach ($additionData ["where"] as $keyIn => $valueIn) {
	    				$this->db->where($keyIn, $valueIn);
	    			}
	    		}
	    		 
	    		if (isset($additionData ["where_in"])) {
	    			foreach ($additionData ["where_in"] as $keyIn => $valueIn) {
	    				$this->db->where_in($keyIn, $valueIn);
	    			}
	    		}
	    		 
	    		if (isset($additionData ["where_not_in"])) {
	    			foreach ($additionData ["where_not_in"] as $keyNotIn => $valueNotIn) {
	    				$this->db->where_not_in($keyNotIn, $valueNotIn);
	    			}
	    		}
	    		 
	    		if (isset($additionData ["or_where"])) {
	    			//$this->db->group_start();
	    			foreach ($additionData ["or_where"] as $keyOr => $valueOr) {
	    				$this->db->or_where($keyOr, $valueOr);
	    			}
	    			//$this->db->group_end();
	    		}
	    		$this->db->group_end();
	    	}
	    	
	    	$query = $this->db->get ();
	    	
	    	$db_error = $this->db->error();
	    	
	    	if ( (!empty($db_error)) && ($db_error['code'] > 0 ) && (!empty($db_error['message']))) {
	    		$this->errorLogEntry(['action' => 'select single join query' , 'data' => $db_error ] );
	    		return $result;
	    	}
	    	
	    	$result = $query->row ();
	    	return $result;
	    }catch(Exception $e){
	    	$this->errorLogEntry(['action' => 'select single join query' , 'data' => '' , 'error_message' => $e->getMessage() , 'file' => $e->getFile() , 'line' => $e->getLine()]);
	    }
	    
	    
	
	    return $result;
	}
	
	
	public  function selectData($tableName,$selectColumns = [],$whereData = [] , $likeData = [] , $additionData = []){
	    $result = [];
	    
	    try{
	    	$select = "";
	    	$defaultWhere = [];
	    	//$defaultWhere = ['t_is_deleted !=' => 1];
	    	if(!empty($selectColumns)){
	    		foreach($selectColumns as $column){
	    			$select  .= $column.',';
	    		}
	    		$select = rtrim($select);
	    	} else {
	    		$select = "*";
	    	}
	    	
	    	
	    	
	    	$this->db->select($select);
	    	$this->db->from ( $tableName );
	    	
	    	
	    	$whereData = (!empty($whereData)) ? array_merge($defaultWhere,$whereData) : $defaultWhere;
	    	if(!empty($whereData)){
	    		foreach($whereData as $key=>$value){
	    			switch($key){
	    				case 'limit':
	    					$this->db->limit ($value);
	    					break;
	    				case 'offset':
	    					$this->db->offset ($value);
	    					break;
	    				case 'group_by':
	    					$this->db->group_by ($value);
	    					break;
	    				case 'having':
	    					$this->db->having ($value[0],$value[1]);
	    					break;
    					case 'custom':
    						if(is_array($value)){
    							foreach($value as $val){
    								$this->db->where ($val);
    							}
    						} else {
    							$this->db->where ($value);
    						}
    						break;
	    				case 'order_by':
	    					$this->db->order_by ($value);
	    					break;
	    				 case 'find_in_set':
	                   		 if(is_array($value[1])){
	                         	foreach($value[1] as $va){
	                         		if(!empty($va)){
	                         			$findInSetWhere = "FIND_IN_SET('".$va."', ".$value[0].")";
	                         			$this->db->where($findInSetWhere);
	                         		}
	                         	}
	                         } else {
	                         	$findInSetWhere = "FIND_IN_SET('".$value[1]."', ".$value[0].")";
	                         	$this->db->where($findInSetWhere);
	                         }
	                         break;
	    				default:
	    					$this->db->where($key,$value);
	    			}
	    			 
	    		}
	    	}
	    	if(!empty($additionData)){
	    		
	    		if(isset($additionData['group_of'])){
	    			$this->db->group_start();
	    		
	    			if ( (isset($additionData ["where"])) && ( in_array('where'  , $additionData['group_of'] ) ) ) {
	    				foreach ($additionData ["where"] as $keyIn => $valueIn) {
	    					$this->db->where($keyIn, $valueIn);
	    				}
	    				unset($additionData ["where"]);
	    			}
	    			if ( (isset($additionData ["or_where"])) && ( in_array('or_where'  , $additionData['group_of'] ) ) ) {
	    				foreach ($additionData ["or_where"] as $keyOr => $valueOr) {
	    					$this->db->or_where($keyOr, $valueOr);
	    				}
	    				unset($additionData ["or_where"]);
	    			}
	    			if ( (isset($additionData ["where_in"])) && ( in_array('where_in'  , $additionData['group_of'] ) ) ) {
	    				foreach ($additionData ["where_in"] as $keyIn => $valueIn) {
	    					$this->db->where_in($keyIn, $valueIn);
	    				}
	    				unset($additionData ["where_in"]);
	    			}
	    			if ( (isset($additionData ["where_not_in"])) && ( in_array('where_not_in'  , $additionData['group_of'] ) ) ) {
	    				foreach ($additionData ["where_not_in"] as $keyNotIn => $valueNotIn) {
	    					$this->db->where_not_in($keyNotIn, $valueNotIn);
	    				}
	    				unset($additionData ["where_not_in"]);
	    			}
	    			unset($additionData ["group_of"]);
	    			$this->db->group_end();
	    		}
	    		
	    		$this->db->group_start();
	    		if (isset($additionData ["where"])) {
	    			foreach ($additionData ["where"] as $keyIn => $valueIn) {
	    				$this->db->where($keyIn, $valueIn);
	    			}
	    		}
	    		 
	    		if (isset($additionData ["where_in"])) {
	    			foreach ($additionData ["where_in"] as $keyIn => $valueIn) {
	    				$this->db->where_in($keyIn, $valueIn);
	    			}
	    		}
	    		 
	    		if (isset($additionData ["where_not_in"])) {
	    			foreach ($additionData ["where_not_in"] as $keyNotIn => $valueNotIn) {
	    				$this->db->where_not_in($keyNotIn, $valueNotIn);
	    			}
	    		}
	    		 
	    		if (isset($additionData ["or_where"])) {
	    			//$this->db->group_start();
	    			foreach ($additionData ["or_where"] as $keyOr => $valueOr) {
	    				$this->db->or_where($keyOr, $valueOr);
	    			}
	    			//$this->db->group_end();
	    		}
	    		$this->db->group_end();
	    	}
	    	
	    	if(!empty($likeData)){
	    		$this->db->group_start();
	    		$index = 0;
	    		foreach($likeData as $key=>$val){
	    			if($index > 0){
	    				$this->db->or_like( $key, $val);
	    			} else {
	    				$this->db->like ( $key, $val );
	    			}
	    			 
	    			$index++;
	    		}
	    		$this->db->group_end();
	    	}
	    	
	    	$query = $this->db->get ();
	    	$db_error = $this->db->error();
	    	if ( (!empty($db_error)) && ($db_error['code'] > 0 ) && (!empty($db_error['message']))) {
	    		$this->errorLogEntry(['action' => 'select query' , 'data' => $db_error ] );
	    		return $result;
	    	}
	    	$result = $query->result ();
	    	return $result;
	    }catch(Exception $e){
	    	$this->errorLogEntry(['action' => 'select query' , 'data' => '' , 'error_message' => $e->getMessage() , 'file' => $e->getFile() , 'line' => $e->getLine()]);
	    }
	    
	
	    return $result;
	}
	
	public  function selectJoinData($tableName,$selectColumns = [],$joinData = [] ,$whereData = [] , $likeData = [] , $additionData = []){
	    $result = [];
	    
	    try{
	    	$select = "";
	    	if(!empty($selectColumns)){
	    		foreach($selectColumns as $column){
	    			$select  .= $column.',';
	    		}
	    		$select = rtrim($select);
	    	} else {
	    		$select = "*";
	    	}
	    	
	    	
	    	
	    	$this->db->select($select);
	    	$this->db->from ( $tableName );
	    	if(!empty($joinData)){
	    		foreach($joinData as $joinInfo){
	    			$this->db->join($joinInfo['tableName'], $joinInfo['condition'] , !empty($joinInfo['type']) ? $joinInfo['type'] : '');
	    		}
	    	}
	    	
	    	
	    	if(!empty($whereData)){
	    		foreach($whereData as $key=>$value){
	    			switch($key){
	    				case 'limit':
	    					$this->db->limit ($value);
	    					break;
	    				case 'offset':
	    					$this->db->offset ($value);
	    					break;
	    				case 'group_by':
	    					$this->db->group_by ($value);
	    					break;
	    				case 'having':
	    					$this->db->having ($value[0],$value[1]);
	    					break;
    					case 'custom':
    						if(is_array($value)){
    							foreach($value as $val){
    								$this->db->where ($val);
    							}
    						} else {
    							$this->db->where ($value);
    						}
    						break;
    					case 'find_in_set':
	                   		 if(is_array($value[1])){
	                         	foreach($value[1] as $va){
	                         		if(!empty($va)){
	                         			$findInSetWhere = "FIND_IN_SET('".$va."', ".$value[0].")";
	                         			$this->db->where($findInSetWhere);
	                         		}
	                         	}
	                         } else {
	                         	$findInSetWhere = "FIND_IN_SET('".$value[1]."', ".$value[0].")";
	                         	$this->db->where($findInSetWhere);
	                         }
	                         break;
    					case 'order_by':
	    					$this->db->order_by ($value);
	    					break;
	    				default:
	    					$this->db->where($key,$value);
	    			}
	    			 
	    		}
	    	}
	    	
	    	if(!empty($additionData)){
	    		
	    		if(isset($additionData['group_of'])){
	    			$this->db->group_start();
	    		
	    			if ( (isset($additionData ["where"])) && ( in_array('where'  , $additionData['group_of'] ) ) ) {
	    				foreach ($additionData ["where"] as $keyIn => $valueIn) {
	    					$this->db->where($keyIn, $valueIn);
	    				}
	    				unset($additionData ["where"]);
	    			}
	    			if ( (isset($additionData ["or_where"])) && ( in_array('or_where'  , $additionData['group_of'] ) ) ) {
	    				foreach ($additionData ["or_where"] as $keyOr => $valueOr) {
	    					$this->db->or_where($keyOr, $valueOr);
	    				}
	    				unset($additionData ["or_where"]);
	    			}
	    			if ( (isset($additionData ["where_in"])) && ( in_array('where_in'  , $additionData['group_of'] ) ) ) {
	    				foreach ($additionData ["where_in"] as $keyIn => $valueIn) {
	    					$this->db->where_in($keyIn, $valueIn);
	    				}
	    				unset($additionData ["where_in"]);
	    			}
	    			if ( (isset($additionData ["where_not_in"])) && ( in_array('where_not_in'  , $additionData['group_of'] ) ) ) {
	    				foreach ($additionData ["where_not_in"] as $keyNotIn => $valueNotIn) {
	    					$this->db->where_not_in($keyNotIn, $valueNotIn);
	    				}
	    				unset($additionData ["where_not_in"]);
	    			}
	    			unset($additionData ["group_of"]);
	    			$this->db->group_end();
	    		}
	    		
	    		$this->db->group_start();
	    		if (isset($additionData ["where"])) {
	    			foreach ($additionData ["where"] as $keyIn => $valueIn) {
	    				$this->db->where($keyIn, $valueIn);
	    			}
	    		}
	    		 
	    		if (isset($additionData ["where_in"])) {
	    			foreach ($additionData ["where_in"] as $keyIn => $valueIn) {
	    				$this->db->where_in($keyIn, $valueIn);
	    			}
	    		}
	    		 
	    		if (isset($additionData ["where_not_in"])) {
	    			foreach ($additionData ["where_not_in"] as $keyNotIn => $valueNotIn) {
	    				$this->db->where_not_in($keyNotIn, $valueNotIn);
	    			}
	    		}
	    		 
	    		if (isset($additionData ["or_where"])) {
	    			//$this->db->group_start();
	    			foreach ($additionData ["or_where"] as $keyOr => $valueOr) {
	    				$this->db->or_where($keyOr, $valueOr);
	    			}
	    			//$this->db->group_end();
	    		}
	    		$this->db->group_end();
	    	}
	    	
	    	
	    	
	    	if(!empty($likeData)){
	    		$this->db->group_start();
	    		$index = 0;
	    		foreach($likeData as $key=>$val){
	    			if($index > 0){
	    				$this->db->or_like( $key, $val);
	    			} else {
	    				$this->db->like ( $key, $val );
	    			}
	    			 
	    			$index++;
	    		}
	    		$this->db->group_end();
	    	}
	    	
	    	$query = $this->db->get ();
	    	
	    	$db_error = $this->db->error();
	    	
	    	if ( (!empty($db_error)) && ($db_error['code'] > 0 ) && (!empty($db_error['message']))) {
	    		$this->errorLogEntry(['action' => 'select join query' , 'data' => $db_error ] );
	    		return $result;
	    	}
	    	$result = $query->result ();
	    	return $result;
	    }catch(Exception $e){
	    	$this->errorLogEntry(['action' => 'select join query' , 'data' => '' , 'error_message' => $e->getMessage() , 'file' => $e->getFile() , 'line' => $e->getLine()]);
	    }
	    
	   
	
	    return $result;
	}
	
	
	public  function selectJoinDataGroup($tableName,$selectColumns = [],$joinData = [] ,$whereData = [] , $likeData = [] , $additionData = []){
		$result = [];
		 
		 
		try{
			$select = "";
			if(!empty($selectColumns)){
				foreach($selectColumns as $column){
					$select  .= $column.',';
				}
				$select = rtrim($select);
			} else {
				$select = "*";
			}
	
	
			$this->db->select($select);
			$this->db->from ( $tableName );
			if(!empty($joinData)){
				foreach($joinData as $joinInfo){
					$this->db->join($joinInfo['tableName'], $joinInfo['condition'] , !empty($joinInfo['type']) ? $joinInfo['type'] : '');
				}
			}
	
	
			if(!empty($whereData)){
				foreach($whereData as $key=>$value){
					switch($key){
						case 'limit':
							$this->db->limit ($value);
							break;
						case 'offset':
							$this->db->offset ($value);
							break;
						case 'group_by':
							$this->db->group_by ($value);
							break;
						case 'having':
							$this->db->having ($value[0],$value[1]);
							break;
						case 'order_by':
							$this->db->order_by ($value);
							break;
						default:
							$this->db->where($key,$value);
					}
		    
				}
			}
	
			if(!empty($additionData)){
				$this->db->group_start();
				if (isset($additionData ["where"])) {
					$this->db->group_start();
					foreach ($additionData ["where"] as $keyIn => $valueIn) {
						$this->db->where($keyIn, $valueIn);
					}
					$this->db->group_end();
				}
	
				if (isset($additionData ["where_in"])) {
					foreach ($additionData ["where_in"] as $keyIn => $valueIn) {
						$this->db->where_in($keyIn, $valueIn);
					}
				}
	
				if (isset($additionData ["where_not_in"])) {
					foreach ($additionData ["where_not_in"] as $keyNotIn => $valueNotIn) {
						$this->db->where_not_in($keyNotIn, $valueNotIn);
					}
				}
				//$this->db->or_group_start();
				if (isset($additionData ["or_where"])) {
					$this->db->or_group_start();
					foreach ($additionData ["or_where"] as $keyOr => $valueOr) {
						if(  $additionData ["or_where"] > 1  ){
							$this->db->where($keyOr, $valueOr);
						}  else {
							$this->db->or_where($keyOr, $valueOr);
						}
					}
					$this->db->group_end();
				}
				
				
				$this->db->group_end();
			}
	
	
	
			if(!empty($likeData)){
				$this->db->group_start();
				$index = 0;
				foreach($likeData as $key=>$val){
					if($index > 0){
						$this->db->or_like( $key, $val);
					} else {
						$this->db->like ( $key, $val );
					}
		    
					$index++;
				}
				$this->db->group_end();
			}
	
			$query = $this->db->get ();
	
			$db_error = $this->db->error();
	
			if ( (!empty($db_error)) && ($db_error['code'] > 0 ) && (!empty($db_error['message']))) {
				$this->errorLogEntry(['action' => 'select query' , 'data' => $db_error ] );
				return $result;
			}
			$result = $query->result ();
			return $result;
		}catch(Exception $e){
			$this->errorLogEntry(['action' => 'select query' , 'data' => '' , 'error_message' => $e->getMessage() , 'file' => $e->getFile() , 'line' => $e->getLine()]);
		}
		 
	
	
		return $result;
	}
	
	
	public function batchInsert($tableName,$tableData){
	    if(!empty($tableData)){
	        $finalData = [];
	        foreach($tableData as $table){
	            $childData = [];
	            $childData = array_merge ( $table, $this->insertDateTimeData () );
	            $finalData[] = $childData;
	        }
	        //echo '<pre>';print_r($finalData);die;
	        $this->db->insert_batch ($tableName, $finalData );
	        return true;
	    }
	    return false;
	}
	
	public function batchUpdate($tableName,$tableData,$whereColumn){
	    if(!empty($tableData)){
	        $finalData = [];
	        foreach($tableData as $table){
	            $childData = [];
	            $childData = array_merge ( $table, $this->updateDateTimeData () );
	            $finalData[] = $childData;
	        }
	        $this->db->update_batch ($tableName, $finalData , $whereColumn );
	        return true;
	    }
	    return false;
	}
	
	public function validatePermission( $permissionName )
	{
		$result = false;
		
		$permissionArray =  $this->permissions;
		
		if( $this->loggedUserRole == ROLE_ADMIN ){
			return true;
		}
		
		return ( in_array( $permissionName , $permissionArray ));
		
	}
	
	public function userPermission( $where = [] , $like = [] , $additionalData = [] ){
	
		$tableName = PERMISSION_TABLE . ' as  p';
		$selectColumns = [
				'GROUP_CONCAT(p.i_id order by p.t_sort asc) as permission_ids' , 'GROUP_CONCAT(p.v_title order by p.t_sort asc) as permissionTitle' ,  'pa.v_group_name' , 'pa.i_module_id'  , 'pa.i_id' , 'mm.v_module_name'
		];
		$joinData = [
				[
						'tableName' => PERMISSION_GROUP_TABLE . ' as pa',
						'condition' => 'p.i_group_id = pa.i_id',
				],
				[
						'tableName' => MODULE_MASTER_TABLE . ' as mm',
						'condition' => 'pa.i_module_id = mm.i_id',
				],
		];
		$defaultWhere = [
				'p.t_is_deleted !=' => 1,
				'mm.t_is_deleted !=' => 1,
				'pa.t_is_deleted !=' => 1,
				'order_by' => 'mm.i_sequence asc,pa.i_sequence asc',
				'group_by' => 'p.i_group_id'
		];
		$defaultLike = [] ;
		$whereData = ! empty($where) ? array_merge( $defaultWhere , $where ) : $defaultWhere;
		$likeData = ! empty($like) ? array_merge( $defaultLike , $like ) : $defaultLike;
	
		$recordDetails = $this->selectJoinData($tableName, $selectColumns, $joinData, $whereData, $likeData , $additionalData);
	
		$finalData = [];
		if(!empty($recordDetails)){
			foreach($recordDetails as $recordDetail){
				$finalData[$recordDetail->i_module_id][] = $recordDetail;
			}
		}
		
		return $finalData;
	
	}
	
	public function clientDropdownDetails( $where = [] , $likeData = [] , $additionalData = [] ){
	
		$tableName = CLIENT_MASTER_TABLE . ' as  c';
		
		$selectColumns = [
				'c.i_id' , 'c.v_name' 
		];
		$defaultWhere = [
				'c.t_is_deleted !=' => 1,
				'order_by' => 'c.v_name asc',
		];
		
		$whereData = ! empty($where) ? array_merge( $defaultWhere , $where ) : $defaultWhere;
		
		$data = $this->selectData($tableName, $selectColumns, $whereData, $likeData , $additionalData);
	
		return $data;
	
	}
	
	public function getMasterUserDetails( $selectedColumns = [] , $where = [] , $likeData = []  , $additionalData = [] ){
	
		if(isset($where['singleRecord'])){
			$this->singleRecord = true;
			unset($where['singleRecord']);
		} else {
			$this->singleRecord = false;
		}
		
		$tableName = LOGIN_TABLE . ' as  l';
		
		$selectData = [
				'l.i_id',
				'l.v_name',
				'l.v_user_name',
		];
		
		
		
		if(!empty($selectedColumns)){
			$selectData = array_merge($selectData , $selectedColumns );
		}
		
		$defaultWhere = [
				'l.t_is_deleted !=' => 1,
				'order_by' => 'l.v_name asc',
				'i_id != ' => SUPER_ADMIN_ID 
		];
		
		//$defaultWhere['l.v_role'] = ROLE_USER;
		if( in_array( $this->loggedUserRole , [ ROLE_USER ] ) ) {
			//$defaultWhere['l.i_id'] = $this->loggedUserId;
		}
		
		if( $this->loggedUserRole != ROLE_ADMIN ){
			$additionalData['where'] = [ 'l.i_id' => $this->loggedUserId ];
			$additionalData['or_where'] = [ 'l.i_id' => $this->loggedUserId ];
		}
		
		$whereData = ! empty ( $where ) ? array_merge ( $defaultWhere, $where ) : $defaultWhere;
		
		if( $this->singleRecord == true ){
			$data= $this->getSingleRecordById( $tableName , $selectData, $whereData , $likeData, $additionalData);
		} else {
			$data= $this->selectData( $tableName , $selectData, $whereData , $likeData, $additionalData);
		}
		
		return $data;
	
	}
	
	
	
	public function getPaymentActivityDetails(  $where = [], $likeData = [], $additionalData = [] ){
	
		$tableName = ACCOUNT_HISTORY_TABLE . ' as ah ';
			
		if (isset($where['singleRecord'])) {
			$this->singleRecord = true;
			unset($where['singleRecord']);
		} else {
			$this->singleRecord = false;
		}
			
		$selectData = [
				'ah.i_id',
				'ah.e_mode',
				'ah.d_amount',
				'ah.i_account_id',
				'ah.dt_action_date',
				'ah.v_remark',
				'am.e_mode as account_type',
				'am.v_account_name',
				'am.e_account_type',
				'income_lookup.v_value as income_purpose',
				'expense_lookup.v_value as expense_purpose',
				'income_client.v_name as income_client_name',
				'expense_client.v_name as expense_client_name',
				'income_login.v_name as income_employee_name'
		];
	
		$defaultWhere = [
				'ah.t_is_deleted != ' => ACTIVE_STATUS,
				'order_by' => 'ah.dt_action_date desc',
		];
	
		$joinData = [
				[ 'tableName' => ACCOUNT_MASTER_TABLE . ' as am' , 'condition' => 'am.i_id = ah.i_account_id' ],
				[ 'tableName' => INCOME_MASTER_TABLE . ' as im' , 'condition' => "im.i_id = ah.i_reference_id and im.t_is_deleted != 1  and ah.e_mode = im.e_income_type" , 'type' => 'left' ],
				[ 'tableName' => LOOKUP_MASTER_TABLE . ' as income_lookup' , 'condition' => "income_lookup.i_id = im.i_purpose_id and income_lookup.t_is_deleted != 1  and income_lookup.v_module_name = '".INCOME_PURPOSE_LOOKUP."'" , 'type' => 'left' ],
				[ 'tableName' => EXPENSE_MASTER_TABLE . ' as em' , 'condition' => "em.i_id = ah.i_reference_id and em.t_is_deleted != 1  and ah.e_mode = em.e_expense_type" , 'type' => 'left' ],
				[ 'tableName' => LOOKUP_MASTER_TABLE . ' as expense_lookup' , 'condition' => "expense_lookup.i_id = em.i_purpose_id and expense_lookup.t_is_deleted != 1  and expense_lookup.v_module_name = '".EXPENSE_PURPOSE_LOOKUP."'" , 'type' => 'left' ],
				[ 'tableName' => LOAN_MASTER_TABLE . ' as income_loan' , 'condition' => "income_loan.i_id = im.i_loan_id" , 'type' => 'left' ],
				[ 'tableName' => CLIENT_MASTER_TABLE . ' as income_client' , 'condition' => "income_client.i_id = income_loan.i_client_id" , 'type' => 'left' ],
				[ 'tableName' => LOAN_MASTER_TABLE . ' as expense_loan' , 'condition' => "expense_loan.i_id = em.i_loan_id" , 'type' => 'left' ],
				[ 'tableName' => CLIENT_MASTER_TABLE . ' as expense_client' , 'condition' => "expense_client.i_id = expense_loan.i_client_id" , 'type' => 'left' ],
				[ 'tableName' => LOGIN_TABLE . ' as income_login' , 'condition' => "income_login.i_id = im.i_login_id" , 'type' => 'left' ],
	
		];
			
		if( $this->loggedUserRole == ROLE_USER ){
			if( in_array( NIRAV_FINANCE_TAG_LOAN_PERMISSION , $this->permissions ) && in_array( PRIVATE_TAG_LOAN_PERMISSION , $this->permissions  )  ){
		
			} else if( in_array( NIRAV_FINANCE_TAG_LOAN_PERMISSION , $this->permissions ) ){
				$defaultWhere['am.e_account_type'] = NIRAV_ENTERPRISE_LOAN_TAG;
			} else if( in_array( PRIVATE_TAG_LOAN_PERMISSION , $this->permissions ) ){
				$defaultWhere['am.e_account_type'] = PRIVATE_LOAN_TAG;
			} else {
				$defaultWhere['am.e_account_type'] = null;
			}
		} 
			
		$whereData = ! empty ( $where ) ? array_merge ( $defaultWhere, $where ) : $defaultWhere;
			
		if ($this->singleRecord == true) {
			$data= $this->getSingleRecordWithJoinById( $tableName , $selectData, $joinData , $whereData , $likeData, $additionalData);
		} else {
			$data= $this->selectJoinData( $tableName , $selectData, $joinData , $whereData , $likeData, $additionalData);
	
		}
		//log_message('debug', $this->db->last_query());	
		return $data;
	
	}
	
	public function getAllParentCategoryName($childCategoryId){
	
		$query = $this->db->query("SELECT T2.i_id, T2.e_payment_status , T2.d_received_amount , T2.dt_collection_date  FROM ( SELECT
				@r AS _id,
				(SELECT @r := i_next_reschedule_id FROM category WHERE i_id = _id) AS i_next_reschedule_id,
				@l := @l + 1 AS lvl
				FROM
				(SELECT @r := 4, @l := 0) vars,
				category h
				WHERE @r <> 0) T1
				JOIN daily_collection T2
				ON T1._id = T2.i_id
				ORDER BY T1.lvl DESC");
	
		$result = $query->result_array();
	
		return $result;
	
	}
	
	public function getAllParentDailyCollection($dailyCollectionId){
	
		$query = $this->db->query("SELECT GROUP_CONCAT(Level SEPARATOR ',') as all_parent_ids FROM (
				   SELECT @Ids := (
				       SELECT GROUP_CONCAT(`i_id` SEPARATOR ',')
				       FROM `daily_collection`
				       WHERE t_is_deleted != 1 and  FIND_IN_SET(`i_next_reschedule_id`, @Ids)
				   ) Level
				   FROM `daily_collection`
				   JOIN (SELECT @Ids := ".$dailyCollectionId.") temp1
				) temp2");
	
		$result = $query->row();
	
		return $result;
	}
	
	public function getDailyCollectionPaymentActivityDetails(  $where = [], $likeData = [], $additionalData = [] ){
	
		$tableName = USER_LEDGER_TABLE . ' as ul ';
			
		if (isset($where['singleRecord'])) {
			$this->singleRecord = true;
			unset($where['singleRecord']);
		} else {
			$this->singleRecord = false;
		}
			
		$selectData = [
				'ul.i_id',
				'0 as  income_purpose',
				'0 as  expense_purpose',
				'"" as  expense_client_name',
				'"Installment" as e_mode',
				'ul.d_received_amount as d_amount',
				'ul.i_account_id',
				'ul.dt_received_date as dt_action_date',
				//'income.v_remark asv_remark',
				'am.e_mode as account_type',
				'am.v_account_name',
				'am.e_account_type',
				'income_client.v_name as income_client_name',
				'income_login.v_name as income_employee_name',
				"concat( FORMAT(ifnull(ul.d_received_amount,0), 0, 'en_IN')  , ' Received From ' , ifnull(income_client.v_name,'') , ' Via ' , ifnull(am.e_mode,'') , ' at ' , ifnull(date_format(ul.dt_received_date, '%d-%m-%Y %h:%i:%s %p'),'') , ' By ' , ifnull(income_login.v_name,'') ) as v_remark"
		];
	
		$defaultWhere = [
				'ul.t_is_deleted != ' => ACTIVE_STATUS,
				'order_by' => 'ul.dt_received_date desc',
				'custom' => '( ( ul.t_is_transfer = 0 ) or (ul.t_is_transfer = 1 ) )'
		];
	
		$joinData = [
				[ 'tableName' => ACCOUNT_MASTER_TABLE . ' as am' , 'condition' => 'am.i_id = ul.i_account_id' ],
				[ 'tableName' => DAILY_COLLECTION_TABLE . ' as dc' , 'condition' => 'dc.i_id = ul.i_collection_id' ],
				//[ 'tableName' => INCOME_MASTER_TABLE . ' as income' , 'condition' => 'income.i_daily_collection_id = dc.i_id' ],
				[ 'tableName' => LOAN_MASTER_TABLE . ' as income_loan' , 'condition' => "income_loan.i_id = dc.i_loan_id"  ],
				[ 'tableName' => CLIENT_MASTER_TABLE . ' as income_client' , 'condition' => "income_client.i_id = income_loan.i_client_id" ],
				[ 'tableName' => LOGIN_TABLE . ' as income_login' , 'condition' => "income_login.i_id = ul.i_login_id" ],
	
		];
			
		if( $this->loggedUserRole == ROLE_USER ){
			if( in_array( NIRAV_FINANCE_TAG_LOAN_PERMISSION , $this->permissions ) && in_array( PRIVATE_TAG_LOAN_PERMISSION , $this->permissions  )  ){
	
			} else if( in_array( NIRAV_FINANCE_TAG_LOAN_PERMISSION , $this->permissions ) ){
				$defaultWhere['am.e_account_type'] = NIRAV_ENTERPRISE_LOAN_TAG;
			} else if( in_array( PRIVATE_TAG_LOAN_PERMISSION , $this->permissions ) ){
				$defaultWhere['am.e_account_type'] = PRIVATE_LOAN_TAG;
			} else {
				$defaultWhere['am.e_account_type'] = null;
			}
		}
			
		$whereData = ! empty ( $where ) ? array_merge ( $defaultWhere, $where ) : $defaultWhere;
			
		if ($this->singleRecord == true) {
			$data= $this->getSingleRecordWithJoinById( $tableName , $selectData, $joinData , $whereData , $likeData, $additionalData);
		} else {
			$data= $this->selectJoinData( $tableName , $selectData, $joinData , $whereData , $likeData, $additionalData);
	
		}
		log_message('debug', $this->db->last_query());
		return $data;
	
	}
	public function getLookUpDetails ($where = [] , $likeData = []){
	
		if(isset($where['singleRecord'])){
			$this->singleRecord = true;
			unset($where['singleRecord']);
		} else {
			$this->singleRecord = false;
		}
	
		$tableName = LOOKUP_MASTER_TABLE ;
	
		$selectData = [
				'i_id',
				'i_sequence',
				'v_module_name',
				'v_value',
				't_is_active',
		];
	
		$defaultWhere = [
				't_is_deleted !=' => 1,
				'order_by' => 'i_sequence asc'
		];
	
		$whereData = ! empty ( $where ) ? array_merge ( $defaultWhere, $where ) : $defaultWhere;
	
		if( $this->singleRecord == true ){
			$data= $this->getSingleRecordById( $tableName , $selectData , $whereData);
		} else {
			$data= $this->selectData( $tableName , $selectData, $whereData , $likeData );
		}
	
		return $data;
	}
	
	public function getMasterClientDetails( $selectedColumns = [] , $where = [] , $likeData = []  , $additionalData = [] ){
	
		if(isset($where['singleRecord'])){
			$this->singleRecord = true;
			unset($where['singleRecord']);
		} else {
			$this->singleRecord = false;
		}
	
		$tableName = CLIENT_MASTER_TABLE . ' as  c';
	
		$selectData = [
				'c.i_id',
				'c.v_client_name',
		];
	
		if(!empty($selectedColumns)){
			$selectData = array_merge($selectData , $selectedColumns );
		}
	
		$defaultWhere = [
				'c.t_is_deleted !=' => ACTIVE_STATUS,
				'order_by' => 'c.v_client_name asc'
		];
	
		//$defaultWhere['l.v_role'] = ROLE_USER;
		if( in_array( $this->loggedUserRole , [ ROLE_FIELD_SALES ] ) ) {
			$defaultWhere['c.i_field_sales_id'] = $this->loggedUserId;
		}
		
		if( in_array( $this->loggedUserRole , [ ROLE_INSIDE_SALES ] ) ) {
			$defaultWhere['c.i_inside_sales_id'] = $this->loggedUserId;
		}
		
		if( in_array( $this->loggedUserRole , [ ROLE_ACCOUNT_HEAD ] ) ) {
			$defaultWhere['c.i_sales_head_id'] = $this->loggedUserId;
		}
	
		$whereData = ! empty ( $where ) ? array_merge ( $defaultWhere, $where ) : $defaultWhere;
	
		if( $this->singleRecord == true ){
			$data= $this->getSingleRecordById( $tableName , $selectData, $whereData , $likeData, $additionalData);
		} else {
			$data= $this->selectData( $tableName , $selectData, $whereData , $likeData, $additionalData);
		}
	
		return $data;
	
	}
	
	public function getSequence(){
		$count = 1;
		 
		$result = $this->db->select ( 'max(i_id) as result' )->from ( LOOKUP_MASTER_TABLE  )->get ()->row ();
		 
		if (! empty ( $result )) {
			$count = ( $result->result + 1 );
		}
		 
		return $count;
	}
	
	public function categoryMenuList( $where = [] ){
		$defaultWhere = [
				't_is_deleted !=' => 1,
				'order_by'=> 'i_sequence asc'
		];
	
		$whereData = ! empty ( $where ) ? array_merge ( $defaultWhere, $where ) : $defaultWhere;
		$categoryDetails = $this->selectData( CATEGORY_TABLE  , [ 'i_id as category_id' , 'v_category_name as category_name' ,  'ifnull(i_parent_category_id,0) as parent_id' , 'v_category_slug as menu_slug_name' ] , $whereData );
		//$categoryDetails = $this->selectData( MENU_TABLE , [ 'i_id as category_id' , 'v_menu_name as category_name' ,  'ifnull(i_parent_menu_id,0) as parent_id' , 'v_menu_slug as menu_slug_name' ] , $whereData );
		$categoryDetails = (!empty($categoryDetails) ?  json_decode(json_encode($categoryDetails),true) : [] );
		$category = array(
				'categories' => array(),
				'parent_cats' => array()
		);
	
		$category = [];
		if(!empty($categoryDetails)){
			foreach($categoryDetails as $categoryDetail){
				$category['categories'][$categoryDetail['category_id']] = $categoryDetail;
				$category['parent_cats'][$categoryDetail['parent_id']][] = (!empty($categoryDetail['category_id']) ? $categoryDetail['category_id'] : 0 );
			}
		}
	
		return $category;
	}
	
public function getAllParentMenuName($childCategoryId , $tableName = CATEGORY_TABLE ){
		
		$query = $this->db->query("SELECT T2.i_id, T2.v_category_name , T2.v_display_name ,T2.v_category_slug  FROM ( SELECT
@r AS _id,
(SELECT @r := i_parent_category_id FROM ".$tableName." WHERE i_id = _id) AS i_parent_menu_id,
@l := @l + 1 AS lvl
FROM
(SELECT @r := ".$childCategoryId.", @l := 0) vars,
".$tableName." h
WHERE @r <> 0) T1
JOIN ".$tableName." T2
ON T1._id = T2.i_id
ORDER BY T1.lvl DESC");
		
		$result = $query->result_array();
		
		return $result;
		
		
	}
	
	public function getAllParentMenuProductsUpdate($menuId){
	
		$query = $this->db->query("SELECT GROUP_CONCAT(Level SEPARATOR ',') as product_menu_ids FROM (
   SELECT @Ids := (
       SELECT GROUP_CONCAT(`i_id` SEPARATOR ',')
       FROM ".CATEGORY_TABLE."
       WHERE t_is_deleted != 1 and  FIND_IN_SET(`i_parent_category_id`, @Ids)
   ) Level
   FROM ".CATEGORY_TABLE."
   JOIN (SELECT @Ids := ".$menuId.") temp1
) temp2");
	
		$result = $query->row();
	
		return $result;
	}
	
	
	public function getOrderNo($machineId , $relatedQuotationType = REGULAR ){
		$machineInfo = [];
		$orderWhere = [];
		if( $machineId != GENERAL_MACHINE_ID ) {
			$machineInfo = $this->getSingleRecordById(MACHINE_MASTER_TABLE , [ 'v_machine_code' ] , [ 'i_id' => $machineId ]);
		}
		$orderWhere['i_machine_id'] = $machineId;
		$machineCode = (!empty($machineInfo) ? $machineInfo->v_machine_code  : GENERAL_MACHINE_CODE );
		$data = $this->getSingleRecordById(ORDER_MASTER_TABLE , [ 'count(i_id) as record' ] , $orderWhere );
		$recordNumber = ( (!empty($data)) && ( $data->record > 0 ) ? ( $data->record + 1 ) : 1 );
		$orderNumber =  $machineCode .'-'.$recordNumber;
		if( (!empty($relatedQuotationType)) && ( $relatedQuotationType == CUSTOMIZED_QUOTATION_FORMAT ) ){
			$orderNumber .= '-CUST';
		}
		return $orderNumber;
	}
	
	public function getAllParentMenuProductsNew($MenuId){
	
		$query = $this->db->query("select  group_concat(i_id) as product_menu_ids from    (select * from ".CATEGORY_TABLE."
         order by i_parent_category_id, i_id) ".CATEGORY_TABLE.",
        (select @pv := ".$MenuId.") initialisation
where   find_in_set(i_parent_category_id, @pv) > 0
and     @pv := concat(@pv, ',', i_id)");
	
		$result = $query->row();
	
		return $result;
	}
	
	public function getAllParentMenuProducts($MenuId){
	
		$query = $this->db->query("SELECT GROUP_CONCAT(lv SEPARATOR ',') as product_menu_ids FROM (
				SELECT @pv:=(SELECT GROUP_CONCAT(i_id SEPARATOR ',') FROM ".CATEGORY_TABLE." WHERE t_is_deleted != 1 and  i_parent_category_id IN (@pv)) AS lv FROM ".CATEGORY_TABLE."
				JOIN
				(SELECT @pv:=$MenuId)tmp
				WHERE i_parent_category_id IN (@pv)) a
				");
	
		$result = $query->row();
	
		return $result;
	}
	
	public function getMasterLeadDetails( $selectedColumns = [] , $where = [] , $likeData = []  , $additionalData = [] ){
	
		if(isset($where['singleRecord'])){
			$this->singleRecord = true;
			unset($where['singleRecord']);
		} else {
			$this->singleRecord = false;
		}
	
		$tableName = LEADS_MASTER_TABLE . ' as  lm';
	
		$selectData = [
				'lm.i_id',
				'lm.v_lead_no',
				'm.v_machine_name'
		];
	
		if(!empty($selectedColumns)){
			$selectData = array_merge($selectData , $selectedColumns );
		}
		
		$joinData = [ [ 'tableName' => MACHINE_MASTER_TABLE . ' as m' , 'condition' => 'm.i_id = lm.i_machine_id' ] ];
	
		$defaultWhere = [
				'lm.t_is_deleted !=' => ACTIVE_STATUS,
				'order_by' => 'lm.i_id desc'
		];
	
		//$defaultWhere['l.v_role'] = ROLE_USER;
		if( in_array( $this->loggedUserRole , [ ROLE_FIELD_SALES ] ) ) {
			//$defaultWhere['c.i_field_sales_id'] = $this->loggedUserId;
		}
	
		if( in_array( $this->loggedUserRole , [ ROLE_INSIDE_SALES ] ) ) {
			//$defaultWhere['c.i_inside_sales_id'] = $this->loggedUserId;
		}
	
		if( in_array( $this->loggedUserRole , [ ROLE_ACCOUNT_HEAD ] ) ) {
			//$defaultWhere['c.i_sales_head_id'] = $this->loggedUserId;
		}
	
		$whereData = ! empty ( $where ) ? array_merge ( $defaultWhere, $where ) : $defaultWhere;
	
		if( $this->singleRecord == true ){
			$data= $this->getSingleRecordWithJoinById( $tableName , $selectData, $joinData , $whereData , $likeData, $additionalData);
		} else {
			$data= $this->selectJoinData( $tableName , $selectData, $joinData , $whereData  , $likeData, $additionalData);
		}
	
		return $data;
	
	}
	
	public function getPartDetails(  $where = [], $likeData = [] , $additionData = [] ){
	
		if(isset($where['singleRecord'])){
			$this->singleRecord = true;
			unset($where['singleRecord']);
		} else {
			$this->singleRecord = false;
		}
	
		$tableName = PART_MASTER_TABLE . ' as pm';
		$selectColumns = [ 'pm.i_id' , 'pm.i_vendor_category_id' ,  'pm.i_category_id' ,  'pm.v_part_name' , 'pm.v_hsn_code' , 'pm.v_part_code' , 'pm.v_desc', 'pm.i_default_qty' ,  'pm.i_purchase_qty' , 'pm.i_purchase_qty', 'pm.i_current_stock',   'pm.v_unit' , 'cm.i_machine_id' , 'group_concat(cm.v_category_name SEPARATOR "," ) as v_category_name' , 'm.v_machine_name' , 'vendor_category.v_value as vendor_category' ];
	
		if(!empty($select)){
			$selectColumns =  $select;
		}
	
		$defaultWhere = [
				'pm.t_is_deleted !=' => ACTIVE_STATUS,
				'm.t_is_deleted !=' => ACTIVE_STATUS,
				'cm.t_is_deleted !=' => ACTIVE_STATUS,
				'order_by' => 'pm.v_part_name asc',
				'group_by'=> 'pm.i_id'
		];
		$joinData = [
				[ 'tableName' => CATEGORY_TABLE . ' as cm' , 'condition' => 'find_in_set( cm.i_id , pm.i_category_id ) ' ],
				[ 'tableName' => MACHINE_MASTER_TABLE . ' as m' , 'condition' =>  'm.i_id = cm.i_machine_id' ],
				[ 'tableName' => LOOKUP_MASTER_TABLE . ' as vendor_category' , 'condition' => 'vendor_category.i_id = pm.i_vendor_category_id and vendor_category.t_is_deleted != 1 ' , 'type' =>'left' ],
		];
		$whereData = ! empty ( $where ) ? array_merge ( $defaultWhere, $where ) : $defaultWhere;
		if( $this->singleRecord == true ){
			$data = $this->getSingleRecordWithJoinById($tableName , $selectColumns , $joinData ,  $whereData , $likeData , $additionData);
		} else {
			$data = $this->selectJoinData($tableName , $selectColumns , $joinData , $whereData , $likeData , $additionData);
		}
	
		return $data;
	}
	
	public function getSingleProductionInfo($where = [], $likeData = [] , $additionalData = [] ){
	
		if(isset($where['singleRecord'])){
			$this->singleRecord = true;
			unset($where['singleRecord']);
		} else {
			$this->singleRecord = false;
		}
	
		$tableName = PRODUCTION_REQUISITION_MASTER_TABLE . ' as prm' ;
	
		$selectColumns = [
				'prm.i_id',
				'prm.v_remark',
				'prm.v_production_main_remark',
				'prm.e_bom_generate',
				'prm.t_mi_status',
				'prm.i_order_id',
				'prm.dt_created_at',
				'prd.i_part_id',
				'prd.i_id as pr_child_id',
				'prd.d_sales_qty',
				'prd.i_pr_master_id',
				'prd.i_category_id as production_part_category_id',
				'prd.v_sales_remark',
				'prd.v_production_remark',
				'prd.t_mi_generate_status',
				'prd.t_mi_allocate_status',
				'prd.d_production_qty',
				'prm.v_pr_no',
				'pm.i_current_stock',
				'pm.v_part_name',
				'om.i_machine_id',
				'om.i_client_id',
				'om.v_order_no',
				'mm.v_machine_name',
				'cm.v_client_name',
				'category.i_master_parent_id',
				'group_concat(ompi.i_category_id) as other_machine_category_ids',
				'prm.t_is_assembly_status',
				'prm.dt_assembly_start_at',
				'prm.dt_assembly_end_at',
				'prm.t_is_software_status',
				'prm.dt_software_start_at',
				'prm.dt_software_end_at',
				'prm.t_is_testing_status',
				'prm.dt_testing_start_at',
				'prm.dt_testing_end_at',
				'dm.i_id as dispatch_id',
				'dm.t_is_completed_status',
				'production_part_category.i_master_parent_id as production_part_parent_category_id',
				'production_part_category.v_category_name as production_part_category_name',
				'production_part_parent_category.v_category_name as production_part_parent_category_name',
		];
	
		$joinData = [
				[  'tableName' => PRODUCTION_REQUISITION_DETAIL_TABLE . ' as prd' , 'condition' => 'prm.i_id = prd.i_pr_master_id and prd.t_is_deleted != 1' ],
				[  'tableName' => ORDER_MASTER_TABLE . ' as om' , 'condition' => 'om.i_id = prm.i_order_id' ],
				[  'tableName' => MACHINE_MASTER_TABLE . ' as mm' , 'condition' => 'mm.i_id = om.i_machine_id' ],
				[  'tableName' => CLIENT_MASTER_TABLE . ' as cm' , 'condition' => 'cm.i_id = om.i_client_id' ],
				[  'tableName' => PART_MASTER_TABLE . ' as pm' , 'condition' => 'pm.i_id = prd.i_part_id' ],
				[  'tableName' => CATEGORY_TABLE . ' as category' , 'condition' => 'find_in_set( category.i_id , pm.i_category_id)' ],
				[  'tableName' => CATEGORY_TABLE . ' as production_part_category' , 'condition' => 'production_part_category.i_id = prd.i_category_id' , 'type' => 'left' ],
				[  'tableName' => CATEGORY_TABLE . ' as production_part_parent_category' , 'condition' => 'production_part_parent_category.i_id = production_part_category.i_master_parent_id' , 'type' => 'left' ],
				[  'tableName' => OTHER_MACHINE_PART_INFO_TABLE . ' as ompi' , 'condition' => 'pm.i_id = ompi.i_part_id and ompi.t_is_deleted != 1' , 'type' => 'left' ],
				[  'tableName' => DISPATCH_MASTER_TABLE . ' as dm' , 'condition' => 'dm.i_order_id = om.i_id' , 'type' => 'left' ],
		];
			
		$defaultWhere = [
				'prm.t_is_deleted !=' => ACTIVE_STATUS,
				'group_by' => 'prd.i_id',
				'order_by' => 'prm.i_id desc '
		];
	
		$whereData = ! empty ( $where ) ? array_merge ( $defaultWhere, $where ) : $defaultWhere;
	
		if( $this->singleRecord == true ){
			$data = $this->getSingleRecordWithJoinById($tableName , $selectColumns , $joinData ,  $whereData , $likeData , $additionalData);
		} else {
			$data = $this->selectJoinData($tableName , $selectColumns ,  $joinData , $whereData , $likeData , $additionalData);
		}
	
		return $data;
	}
	
	public function getProductionPartDetails( $where = [], $likeData = [] , $additionData = [] , $selectedMachineId = null , $noOfMachine = 0 ){
	
		if(isset($where['singleRecord'])){
			$this->singleRecord = true;
			unset($where['singleRecord']);
		} else {
			$this->singleRecord = false;
		}
	
		$tableName = PART_MASTER_TABLE . ' as pm';
		
		$selectColumns = [ 
				'pm.i_id' , 
				'pm.i_category_id' ,  
				//'omp.i_category_id as other_machine_category_id',
				'cm.i_master_parent_id' ,
				'pm.v_other_machine_ids' ,  
				'pm.i_current_stock' ,   
				'pm.t_is_active' , 
				'pm.v_part_name' , 
				'pm.v_part_code' ,
				'pm.i_threshold_qty' , 
				'pm.v_hsn_code' , 
				'pm.v_desc', 
				'pm.i_default_qty as default_qty' ,
				'pm.i_purchase_qty',  
				'pm.d_purchase_price' , 
				'pm.d_sell_price', 
				'pm.e_bought_job_work' ,
				'pm.v_unit' , 
				'cm.i_machine_id' , 
				'group_concat(DISTINCT(cm.v_category_name) order by cm.i_id asc) as v_category_name' ,
				'group_concat(DISTINCT(cm.i_id) order by cm.i_id asc) as category_master_category_id' ,
				'group_concat(DISTINCT(part_master_category.v_category_name)) as part_master_category_name' ,
				'group_concat(DISTINCT(cm.v_all_parent_name)) as v_all_parent_name' ,
				'cm.v_category_slug' , 
				'm.v_machine_name' 
		];
	
		if(!empty($select)){
			$selectColumns =  $select;
		}
		
		if(!empty($selectedMachineId)){
			$selectColumns[] = 'omp.i_used_qty';
			$selectColumns[] = 'omp.i_category_id as other_machine_category_id';
			$selectColumns[] = 'omc.i_parent_category_id as other_machine_parent_category_id';
			$selectColumns[] = 'omc.i_master_parent_id as other_machine_master_parent_category_id';
			$selectColumns[] = 'group_concat(DISTINCT(omc.v_category_name)) as other_machine_category_name';
		}
		
		if(!empty($selectedMachineId)){
			$selectColumns[] = "case when ( cm.i_machine_id = '".GENERAL_MACHINE_ID."' and '".GENERAL_MACHINE_ID."' != '".$selectedMachineId."' ) then ( omp.i_used_qty ) else pm.i_default_qty end as default_qty";
			$selectColumns[] = "case when ( cm.i_machine_id = '".GENERAL_MACHINE_ID."' and '".GENERAL_MACHINE_ID."' != '".$selectedMachineId."' ) then ( group_concat( omc.v_category_name ) ) else group_concat(cm.v_category_name) end as category_name";
		}
		
		if(!empty($noOfMachine)){
			$selectColumns[] = "case
			when ( pm.i_current_stock  <= ( case when ( cm.i_machine_id = '".GENERAL_MACHINE_ID."' and '".GENERAL_MACHINE_ID."' != '".$selectedMachineId."' ) then ( omp.i_used_qty ) else pm.i_default_qty end ) * ".$noOfMachine." ) then 'danger'
			when ( pm.i_current_stock  <= ( case when ( cm.i_machine_id = '".GENERAL_MACHINE_ID."' and '".GENERAL_MACHINE_ID."' != '".$selectedMachineId."' ) then ( omp.i_used_qty ) else pm.i_default_qty end ) * ".$noOfMachine." ) then 'needed'
			when ( pm.i_current_stock  <= ( case when ( cm.i_machine_id = '".GENERAL_MACHINE_ID."' and '".GENERAL_MACHINE_ID."' != '".$selectedMachineId."' ) then ( omp.i_used_qty ) else pm.i_default_qty end ) * ".$noOfMachine." ) then 'green'
			else 'good' end as qty_status";
		}
	
		$defaultWhere = [
				'pm.t_is_deleted !=' => ACTIVE_STATUS,
				'm.t_is_deleted !=' => ACTIVE_STATUS,
				'cm.t_is_deleted !=' => ACTIVE_STATUS,
				//'order_by' => 'category_name asc',
				'group_by' => 'pm.i_id'
		];
		
		if(!empty($selectedMachineId)){
			$defaultWhere['order_by'] = 'category_name asc';
		} else {
			$defaultWhere['order_by'] = 'pm.v_part_name asc';
		}
		$joinData = [
				[ 'tableName' => CATEGORY_TABLE . ' as cm' , 'condition' => 'find_in_set( cm.i_id , pm.i_category_id )' ],
				[ 'tableName' => MACHINE_MASTER_TABLE . ' as m' , 'condition' =>  'm.i_id = cm.i_machine_id' ],
				[ 'tableName' => CATEGORY_TABLE . ' as part_master_category' , 'condition' => 'part_master_category.i_id = cm.i_parent_category_id' , 'type' => 'left' ],
		];
		
		if(!empty($selectedMachineId)){
			$joinData[] = [ 'tableName' => OTHER_MACHINE_PART_INFO_TABLE . ' as omp' , 'condition' =>  "omp.i_part_id = pm.i_id and omp.t_is_deleted != 1 and omp.i_machine_id ='".$selectedMachineId."'" , 'type' => 'left' ];
			$joinData[] = [ 'tableName' => CATEGORY_TABLE . ' as omc' , 'condition' =>  "find_in_set( omc.i_id , omp.i_category_id ) and omc.t_is_deleted != 1" , 'type' => 'left' ];
		}
		
		$whereData = ! empty ( $where ) ? array_merge ( $defaultWhere, $where ) : $defaultWhere;
		if( $this->singleRecord == true ){
			$data = $this->getSingleRecordWithJoinById($tableName , $selectColumns , $joinData ,  $whereData , $likeData , $additionData);
		} else {
			$data = $this->selectJoinData($tableName , $selectColumns , $joinData , $whereData , $likeData , $additionData);
		}
		
		return $data;
	}
	
	public function getMaterialIssueNo( $productionNo , $where = [], $likeData = [] , $additionalData = [] ){
	
		$defaultWhere = [];
		
		$whereData = ! empty ( $where ) ? array_merge ( $defaultWhere, $where ) : $defaultWhere;
	
		$data = $this->getSingleRecordById(MATERIAL_ISSUE_MASTER_TABLE , [ 'count(i_id) as record_count' ] , $whereData , $likeData , $additionalData);
	
		$miNumber = ( ( (!empty($data)) && ( $data->record_count > 0 ) ) ? ( $data->record_count + 1 ) : 1 );
	
		$miNumber = $productionNo. '-MI-'. $miNumber;
	
		return $miNumber;
	}
	
	public function getInnerPrdouctionNo( $partCode , $where = [], $likeData = [] , $additionalData = [] ){
	
		$defaultWhere = [];
	
		$whereData = ! empty ( $where ) ? array_merge ( $defaultWhere, $where ) : $defaultWhere;
	
		$data = $this->getSingleRecordById(INNER_PRODUCTION_MASTER_TABLE , [ 'count(i_id) as record_count' ] , $whereData , $likeData , $additionalData);
	
		$miNumber = ( ( (!empty($data)) && ( $data->record_count > 0 ) ) ? ( $data->record_count + 1 ) : 1 );
	
		$miNumber = $partCode. '-'. $miNumber;
	
		return $miNumber;
	}
	
	public function getMasterOrderDetails( $selectedColumns = [] , $where = [] , $likeData = []  , $additionalData = [] ){
	
		if(isset($where['singleRecord'])){
			$this->singleRecord = true;
			unset($where['singleRecord']);
		} else {
			$this->singleRecord = false;
		}
	
		$tableName = ORDER_MASTER_TABLE . ' as  om';
	
		$selectData = [
				'om.i_id',
				'om.v_order_no',
				'mm.v_machine_name'
		];
	
		if(!empty($selectedColumns)){
			$selectData = array_merge($selectData , $selectedColumns );
		}
	
		$joinData = [ 
				[ 'tableName' => MACHINE_MASTER_TABLE . ' as mm' , 'condition' => 'mm.i_id = om.i_machine_id' ],
				[ 'tableName' => CLIENT_MASTER_TABLE . ' as cm' , 'condition' => 'cm.i_id = om.i_client_id' ]
			
		];
	
		$defaultWhere = [
				'mm.t_is_deleted !=' => ACTIVE_STATUS,
				'om.t_is_deleted !=' => ACTIVE_STATUS,
				'cm.t_is_deleted !=' => ACTIVE_STATUS,
				'order_by' => 'om.i_id desc'
		];
	
		//$defaultWhere['l.v_role'] = ROLE_USER;
		if( in_array( $this->loggedUserRole , [ ROLE_FIELD_SALES ] ) ) {
			//$defaultWhere['c.i_field_sales_id'] = $this->loggedUserId;
		}
	
		if( in_array( $this->loggedUserRole , [ ROLE_INSIDE_SALES ] ) ) {
			//$defaultWhere['c.i_inside_sales_id'] = $this->loggedUserId;
		}
	
		if( in_array( $this->loggedUserRole , [ ROLE_ACCOUNT_HEAD ] ) ) {
			//$defaultWhere['c.i_sales_head_id'] = $this->loggedUserId;
		}
	
		$whereData = ! empty ( $where ) ? array_merge ( $defaultWhere, $where ) : $defaultWhere;
	
		if( $this->singleRecord == true ){
			$data= $this->getSingleRecordWithJoinById( $tableName , $selectData, $joinData , $whereData , $likeData, $additionalData);
		} else {
			$data= $this->selectJoinData( $tableName , $selectData, $joinData , $whereData  , $likeData, $additionalData);
		}
	
		return $data;
	
	}
	
	public function getExpenseUserDetails( $selectedColumns = [] , $where = [] , $likeData = []  , $additionalData = [] ){
	
		if(isset($where['singleRecord'])){
			$this->singleRecord = true;
			unset($where['singleRecord']);
		} else {
			$this->singleRecord = false;
		}
	
		$tableName = LOGIN_TABLE . ' as  l';
	
		$selectData = [
				'l.i_id',
				'l.v_name',
				'l.v_user_name',
		];
	
	
	
		if(!empty($selectedColumns)){
			$selectData = array_merge($selectData , $selectedColumns );
		}
	
		$defaultWhere = [
				'l.t_is_deleted !=' => 1,
				'order_by' => 'l.v_name asc'
		];
	
		if( !in_array( $this->loggedUserRole , [ ROLE_ADMIN , ROLE_ACCOUNT ] ) ) {
			$additionalData['where'] = [ 'l.i_id' => $this->loggedUserId ];
			$additionalData['or_where'] = [ 'l.i_supervisor_id' => $this->loggedUserId ];
		}
	
		$whereData = ! empty ( $where ) ? array_merge ( $defaultWhere, $where ) : $defaultWhere;
	
		if( $this->singleRecord == true ){
			$data= $this->getSingleRecordById( $tableName , $selectData, $whereData , $likeData, $additionalData);
		} else {
			$data= $this->selectData( $tableName , $selectData, $whereData , $likeData, $additionalData);
		}
	
		return $data;
	
	}
	public function getOrderRecordDetails(  $where = [], $likeData = [] , $additionData = [] ){
	
		if(isset($where['singleRecord'])){
			$this->singleRecord = true;
			unset($where['singleRecord']);
		} else {
			$this->singleRecord = false;
		}
	
		$tableName = ORDER_MASTER_TABLE . ' as om';
		$selectColumns = [
				'om.i_id' ,
				'om.v_order_remark',
				'om.e_order_type',
				'om.v_order_no' ,
				'om.i_client_id' ,
				'om.i_machine_id' ,
				'om.i_ref_quotation_id' ,
				'om.e_status',
				'om.i_machine_type_id' ,
				'om.dt_received_date' ,
				'om.dt_est_dispatch_date' ,
				'om.dt_dispatch_date',
				'om.t_is_generate_requistion',
				'om.t_is_active' ,
				'cm.v_client_name' ,
				'm.v_machine_name' ,
				'sum(om.d_po_amount) as order_amount',
				'dm.i_order_id',
				'dm.dt_installation_date',
				'dm.t_is_installation_status',
				'om.dt_po_approve_date',
		];
	
		$defaultWhere = [
				'om.t_is_deleted !=' => ACTIVE_STATUS,
				'cm.t_is_deleted !=' => ACTIVE_STATUS,
				'm.t_is_deleted !=' => ACTIVE_STATUS,
				
		];
		$joinData = [
				[ 'tableName' => CLIENT_MASTER_TABLE . ' as cm' , 'condition' => 'cm.i_id = om.i_client_id' ],
				[ 'tableName' => MACHINE_MASTER_TABLE . ' as m' , 'condition' =>  'm.i_id = om.i_machine_id' ],
				[ 'tableName' => DISPATCH_MASTER_TABLE . ' as dm' , 'condition' =>  'dm.i_id = dm.i_order_id' ,'type' => 'left'],
		];
		$whereData = ! empty ( $where ) ? array_merge ( $defaultWhere, $where ) : $defaultWhere;
		if( $this->singleRecord == true ){
			$data = $this->getSingleRecordWithJoinById($tableName , $selectColumns , $joinData ,  $whereData , $likeData , $additionData);
		} else {
			$data = $this->selectJoinData($tableName , $selectColumns , $joinData , $whereData , $likeData , $additionData);
		}
	
		return $data;
	}
	public function getExpenseRecordDetials($where = [],$likeData=[],$additionalData = []){
	
		if(isset($where['singleRecord'])){
			$this->singleRecord = true;
			unset($where['singleRecord']);
		}else{
			$this->singleRecord = false;
		}
	
		$tableName = EXPENSE_MASTER_TABLE .' as em';
	
		$selectColumns = [
				'DISTINCT(em.i_id)',
				'em.e_type_selection',
				'em.i_user_id',
				'em.i_client_id',
				'cm.v_client_name',
				'o.v_order_no',
				'l.v_user_name',
				'em.i_user_id',
				'l.i_supervisor_id',
				'l.d_hotel_charge',
				'l.d_food_charge',
				'l.d_travel_charge',
				'em.i_order_id',
				'em.v_expense_type',
				'em.e_record_status',
				'em.e_account_record_status',
				'em.dt_from_date',
				'em.dt_to_date',
				'sum(d_total_amount) as expense_amount',
				'em.v_expense_type',
				'em.v_file',
				'em.v_remark',
				'em.t_is_active',
		];
		$joinData = [
				[
						'tableName' =>CLIENT_MASTER_TABLE. ' as cm',
						'condition' =>'em.i_client_id = cm.i_id'
				],
	
				[
						'tableName' =>ORDER_MASTER_TABLE. ' as o',
						'condition' =>'em.i_order_id = o.i_id',
						'type' => 'left'
	
				],
				[
						'tableName' =>LOGIN_TABLE. ' as l',
						'condition' =>'em.i_user_id= l.i_id'
	
				],
	
		];
	
	
		$selectColumns[] = "case
						when v_expense_type = '".EXPENSE_TYPE_FOOD."' then ( ( DATEDIFF(em.dt_to_date, em.dt_from_date) + 1 ) * ifnull(d_food_charge,0) )
						when v_expense_type = '".EXPENSE_TYPE_HOTEL."' then ( ( DATEDIFF(em.dt_to_date, em.dt_from_date) + 1 ) * ifnull(d_hotel_charge,0) )
						when v_expense_type = '".EXPENSE_TRAVEL."' then ( ( DATEDIFF(em.dt_to_date, em.dt_from_date) + 1 ) * ifnull(d_travel_charge,0) )
						end  as allowed_expense";
	
	
		$defaultWhere = [
				'em.t_is_deleted !=' => 1,
				
	
		];
	
		if( !in_array( $this->loggedUserRole , [ ROLE_ACCOUNT , ROLE_ADMIN  ] ) ){
			$additionalData['where'] = [ 'l.i_id' => $this->loggedUserId ];
			$additionalData['or_where'] = [ 'l.i_supervisor_id' => $this->loggedUserId ];
		}
	
		if( $this->loggedUserRole == ROLE_ACCOUNT  ){
			$defaultWhere['em.e_record_status'] = APPROVED_STATUS;
		}
	
		$whereData = ! empty ( $where ) ? array_merge ( $defaultWhere, $where ) : $defaultWhere;
		if($this->singleRecord == true){
			$data = $this->getSingleRecordWithJoinById( $tableName,$selectColumns,$joinData, $whereData, $likeData, $additionalData );
		}else {
			$data = $this->selectJoinData($tableName,$selectColumns,$joinData,$whereData,$likeData,$additionalData);
		}
	
		return $data;
	}
	
	public function orderDashboardDetails( $selectData = [], $where = [], $likeData = [] , $additionData = [] ){
		
		if(isset($where['singleRecord'])){
			$this->singleRecord = true;
			unset($where['singleRecord']);
		} else {
			$this->singleRecord = false;
		}
		
		$tableName = ORDER_MASTER_TABLE . ' as om';
		
		$selectColumns = [
				'DISTINCT ( om.i_id )'  ,
				'om.v_order_remark',
				'om.e_order_type',
				'om.v_order_no' ,
				'om.i_client_id' ,
				'om.i_machine_id' ,
				'om.i_ref_quotation_id' ,
				'om.e_status',
				'om.i_machine_type_id' ,
				'om.dt_received_date' ,
				'om.dt_est_dispatch_date' ,
				'om.dt_dispatch_date',
				'om.t_is_generate_requistion',
				'om.t_is_active' ,
				'cm.v_client_name' ,
				'm.v_machine_name' ,
				'om.d_po_amount',
				'om.dt_po_approve_date',
		];
		
		if(!empty($selectData)){
			$selectColumns = array_merge($selectColumns, $selectData);
		}
		
		
		$defaultWhere = [
				'om.t_is_deleted !=' => ACTIVE_STATUS,
				'cm.t_is_deleted !=' => ACTIVE_STATUS,
				'm.t_is_deleted !=' => ACTIVE_STATUS,
				'order_by' => 'om.i_id desc',
		];
		$joinData = [
				[ 'tableName' => CLIENT_MASTER_TABLE . ' as cm' , 'condition' => 'cm.i_id = om.i_client_id' ],
				[ 'tableName' => MACHINE_MASTER_TABLE . ' as m' , 'condition' =>  'm.i_id = om.i_machine_id' ],
		];
		$whereData = ! empty ( $where ) ? array_merge ( $defaultWhere, $where ) : $defaultWhere;
		if( $this->singleRecord == true ){
			$data = $this->getSingleRecordWithJoinById($tableName , $selectColumns , $joinData ,  $whereData , $likeData , $additionData);
		} else {
			$data = $this->selectJoinData($tableName , $selectColumns , $joinData , $whereData , $likeData , $additionData);
		}
		
		return $data;
		
	}
	
	public function dashboardLeadDetails( $selectColumns = [], $where = [], $likeData = [] , $additionalData = [] ){
	
		$tableName = LEADS_MASTER_TABLE.' as lm' ;
		
		if (isset($where['singleRecord'])) {
			$this->singleRecord = true;
			unset($where['singleRecord']);
		} else {
			$this->singleRecord = false;
		}
			
		$selectData = [
				'lm.i_id',
				'lm.i_followup_added',
				'lm.e_special_lead_status',
				'lm.v_reason_remark',
				'lm.d_price',
				'lm.i_machine_id',
				'lm.v_person_name',
				'lm.i_client_id',
				'lm.dt_lead_date',
				'lm.t_is_apprvoed_required',
				'lm.v_lead_no',
				'lm.i_currency_id',
				//'lm.i_lead_status_id',
				'lm.i_lead_stage_id',
				'lm.i_lead_source_id',
				'lm.v_lead_source_remarks',
				'lm.d_expected_revenue',
				'lm.v_remarks',
				'lm.i_lead_created_id',
				'lm.i_lead_assigned_id',
				'lm.dt_closure_date',
				'lm.v_currency_detail',
				'lm.e_currency_type',
				'lm.d_lead_prospect_value',
				'lm.v_currency_detail',
				'lm.dt_closure_date',
				'lm.t_is_active',
				//'status.v_value as status',
				'source.v_value as source',
				'stage.v_value as stage',
				'created_by.v_name as created_by',
				'assigned_by.v_name as assigned_by',
				'c.v_client_name as client_name',
				'cm.v_title as currency_name',
				'mm.v_machine_name'
		];
			
		$joinData = [
				[
						'tableName' => LOOKUP_MASTER_TABLE . ' as source ',
						'condition' => 'lm.i_lead_source_id = source.i_id' 
				],
					
				[
						'tableName' => LOOKUP_MASTER_TABLE . ' as stage ',
						'condition' => 'lm.i_lead_stage_id = stage.i_id',
				],
					
				[
						'tableName' => CURRENCY_MASTER_TABLE . ' as cm ',
						'condition' => 'cm.i_id = lm.i_currency_id',
						'type' => 'left'
				],
					
				[
						'tableName' => LOGIN_TABLE .' as created_by ',
						'condition' => 'lm.i_lead_created_id = created_by.i_id'
				],
				
				[
						'tableName' => LOGIN_TABLE .' as assigned_by ',
						'condition' => 'lm.i_lead_assigned_id = assigned_by.i_id'
				],
					
				[
						'tableName' => CLIENT_MASTER_TABLE . ' as c ',
						'condition' => 'lm.i_client_id = c.i_id'
				],
				[
						'tableName' => MACHINE_MASTER_TABLE . ' as mm ',
						'condition' => 'lm.i_machine_id = mm.i_id'
				]
		];
		
		if(!empty($selectColumns)){
			$selectData = array_merge($selectData , $selectColumns );
		}
			
		$defaultWhere = [
			'order_by' => 'date(lm.dt_lead_date) desc,lm.i_id desc',
			'lm.t_is_deleted != ' => 1,
			'c.t_is_deleted != ' => 1,
			'mm.t_is_deleted != ' => 1
		];
		
		if( in_array( $this->loggedUserRole , [ ROLE_FIELD_SALES , ROLE_INSIDE_SALES , ROLE_ACCOUNT_HEAD ] ) ){
			$additionalData['where'] = [ 'lm.i_lead_assigned_id' => $this->loggedUserId ]; 
			$additionalData['or_where'] = [ 'lm.i_lead_created_id' => $this->loggedUserId ];
		}
			
		$whereData = ! empty ( $where ) ? array_merge ( $defaultWhere, $where ) : $defaultWhere;
			
		if ($this->singleRecord == true) {
		
			$data= $this->getSingleRecordWithJoinById( $tableName , $selectData, $joinData , $whereData , $likeData, $additionalData);
		
		}
		else {
		
			$data= $this->selectJoinData( $tableName , $selectData, $joinData , $whereData , $likeData, $additionalData);
		
		}
		return $data;
	
	}
}