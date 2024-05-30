<?php

if(! function_exists('getEngineerDetails')){
    
    function getEngineerDetails (){
        
        $data = [];
        $data[EXECTIVE_ENGNEER] = EXECTIVE_ENGNEER;
        $data[DEPUTY_ENGINEER] = DEPUTY_ENGINEER;
        $data[JUNIOR_ENGINEER] = JUNIOR_ENGINEER;
        
        return $data;
        
    }
    
}


if(! function_exists('getSubStationDetails')){
    
    function getSubStationDetails ( $subStationId = null ){
        $CI = & get_instance();
//         var_dump($subStationId);die;
        $data = [];
        $data[KV_66_SUB_STATION] = $CI->lang->line("66-kv-sub-station");
        $data[KV_132_SUB_STATION] = $CI->lang->line("132-kv-sub-station");
        $data[KV_220_SUB_STATION] = $CI->lang->line("220-kv-sub-station");
        $data[KV_400_SUB_STATION] = $CI->lang->line("400-kv-sub-station");
        
        if(!empty($subStationId)){
            return $data[$subStationId];
        }
        
        return $data;
        
    }
    
}



if(!function_exists('uperCaseWord')){
    function uperCaseWord( $value = null ){
        $result = null;
        if(!empty($value)){
            $result = preg_replace('/[-_]/'," " , $value);
            $result = strtoupper($result);
            
        }
        
        return $result;
    }
}


if(!function_exists('getPostData')){
    function getPostData( $filedName = null ){
        $result = null;
        $CI = & get_instance();
        if(!empty($CI->input->post($filedName))){
            $result = $CI->input->post($filedName);
        }
        
        return $result;
    }
}

if(!function_exists('getDatabaseValue')){
    function getDatabaseValue( $value = null ){
        
        $result = null;
        
        if( isset($value) && !empty($CI->input->post($value))){
            $result = $value;
        }
        
        return $result;
    }
}

if(!function_exists('getStateDetails')){
    function getStateDetails($stateId = null){
        $CI = & get_instance();
        $data = [];
        
        $data[GUJARAT_STATE_ID] = $CI->lang->line("gujarat");
        $data[MAHARESTRA_STATE_ID] = $CI->lang->line("maharastra");
        
        if(!empty($stateId)){
            return $data[$stateId];
        }
        
        return $data;
    }
}


if(!function_exists('getCompanyDetails')){
    function getCompanyDetails($companyId = null){
        $CI = & get_instance();
        $data = [];
        
        $data[ANAND] = ANAND;
        $data[UNNATI] = UNNATI;
        $data[BHAVESH] = BHAVESH;
        $data[KRUPAL] = KRUPAL;
        
        if(!empty($companyId)){
            return $data[$companyId];
        }
        
        return $data;
    }
}



if(!function_exists('dd')){
    function dd( $value = null ){
        echo "<pre>";
        if(!empty($value)){
            print_r($value);
        }
        die("print");
    }
}


if(!function_exists('last_query')){
    function last_query(){
        echo "<pre>";
        $CI = & get_instance();
        print_r($CI->db->last_query());die;
        
    }
}



if(!function_exists('getQytUnit')){
    function getQytUnit( $value = "" ){
        $CI = &get_instance();
        $data = [];
        $data[NO] = NO;
        $data[KG] = KG;
        $data[SET] = SET;
        
        if(!empty($value)){
            return $data[$value];
        }
        
        return $data;
    }
}





if(!function_exists('dbDate')){
    function dbDate( $date = "" ){
        
        $convertDate = date('Y-m-d' , strtotime($date));
        
        return $convertDate;
    }
}