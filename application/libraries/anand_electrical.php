<?php 

class anand_electrical {
    
    
    
  
    public function setFlashMessage( $type = "" , $message = "" ){

        $data = "";
        
        $CI =& get_instance();
        
        if(!empty($message)){
            $data = '<div class="alert alert-'.$type.' alert-dismissible fade show text-center" role="alert">
                      '.$message.'
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>';
        }
        
        $CI->session->set_flashdata('myMessage', $data);

        return $data;

   }
   
   public function encode( $data ){
       if(empty($data)){
           return "";
       }
       
       $encodedData = base64_encode($data);
       
       return $encodedData;
   }
      
   
   public function decode( $data ){
       if(empty($data)){
           return  "";
       }
       
       $decodedData = base64_decode($data);
       
       return $decodedData;
   }
}