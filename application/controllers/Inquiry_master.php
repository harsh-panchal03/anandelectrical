<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use Mpdf\Mpdf;

class Inquiry_master extends MY_controller{
    
    
    public function __construct(){
        
        parent::__construct();
        $this->tableName = INQUIRY_MASTER_TABLE;
        $this->redirectUrl = INQUIRY_MASTER_URL;
        $this->folderName = ADMIN_FOLDER."inquiry/";
        $this->perPageRecord = PER_PAGE;
        $this->moduleName = $this->lang->line("inquiry");
        $this->load->model('inquiry_model' , 'crud_model');
        
    }
    
    
    
    
    public function index(){
        
        $inquiryDetils = $this->crud_model->selectData($this->tableName);
        
        $dataInqury = $this->crud_model->getInquryDetails();
        
        $data = [];
        $headerData['pageTitle'] = $this->lang->line("inquiry");
        $data['recordDetails'] = $dataInqury;
        $data['totalRecord'] = count($this->crud_model->getInquryDetails( [ 'im.i_id' ] ));
        
        $this->loadAdminView( $headerData , $this->folderName."inquiry" , $data);
    }

    public function showAddForm(){
        $data = $headerData = [];
        $data['pageTitle'] = $this->lang->line("add-inquiry");
        
        $headerData['pageTitle'] = $data['pageTitle'];
        $data['pageTitle'] = $this->lang->line("add-inquiry");
        $data['subStationDetails'] = $this->crud_model->getSubStationDetails( [ "sb.t_is_active" => ACTIVE_STATUS ] );
        $data['companyDetails'] = getCompanyDetails();
        $data['itemDetails'] = $this->crud_model->selectData(  DESCRIPTION_DETAILS_MASTER_TABLE,[ "i_id" , "v_description_details"] , [ "t_is_active" => ACTIVE_STATUS ] );
        
        $data['unitDetails'] = getQytUnit();
        
        $this->loadAdminView( $headerData , $this->folderName."add-inquiry" , $data);
        
        
        
    }
    
    public function add(){
       
        $inquiryNumber = getPostData('inquiry_no');
        $subStationDetils = (!empty(getPostData('city_id')) ? $this->anand_electrical->decode(getPostData('city_id')) : "");
        $orderCompany = getPostData('order_company');
        $inquiryCompany = (!empty(getPostData('inquiry_company')) ? implode(",",getPostData('inquiry_company')) : "");
        $descriptionCount = (int)getPostData('count_for_description');
        
        $recordData = [];
        
        $recordData['v_inquiry_number'] = $inquiryNumber;
        $recordData['e_order_company'] = $orderCompany;
        $recordData['v_inquiry_company'] = $inquiryCompany;
       
        $recordData['i_sub_station_id'] = $subStationDetils;
        $recordData['dt_anand_inquiry_date'] = (!empty(getPostData('anand_inquiry_date')) ? dbDate(getPostData('anand_inquiry_date')) : "");
        $recordData['dt_unnati_inquiry_date'] = (!empty(getPostData('unnati_inquiry_date')) ? dbDate(getPostData('unnati_inquiry_date')) : "");
        $recordData['dt_bhavesh_inquiry_date'] = (!empty(getPostData('bhavesh_inquiry_date')) ? dbDate(getPostData('bhavesh_inquiry_date')) : "");
        
       
        $finalDescriptionData = [];
        
        
        
        $successMessage = sprintf($this->lang->line("success-create"), $this->lang->line("inquiry"));
        $errorMessage = sprintf($this->lang->line("error-create"), $this->lang->line("inquiry"));
        
        if($recordId > 0 ){
            
        }else{
            
            $insertInquiryId = $this->crud_model->insertTableData( $this->tableName , $recordData );
            
            if($insertInquiryId > 0){
                
                $finalDescriptionData = [];
                
                for ( $i = 0 ; $i <= $descriptionCount ; $i++ ){
                    
                    $rowData = [];
                    
                    if(!empty($this->input->post('description_'. $i .''))){
                        
                        $rowData['i_description_id'] = $this->anand_electrical->decode( getPostData('description_'. $i .''));
                        $rowData['v_unit'] = getPostData('unit_'. $i .'');
                        $rowData['i_inquiry_master_id'] = $insertInquiryId;
                        $rowData['v_anand_rate'] = getPostData('anand_rate_'.$i.'');
                        $rowData['v_bhavesh_rate'] = getPostData('bhavesh_rate_'.$i.'');
                        $rowData['v_unnati_rate'] = getPostData('unnati_rate_'.$i.'');
                        $finalDescriptionData[] = $rowData;
                        
                    }
                }
            }
            
            
            if(!empty($finalDescriptionData)){
                $insertDescription = $this->crud_model->batchInsert(INQUIRY_DESCRIPTION_DETAILS_TABLE , $finalDescriptionData);
                $result = TRUE;
            }
        }
        
        if($result != false){
            $this->anand_electrical->setFlashMessage( "success" , $successMessage);
        }else{
            $this->anand_electrical->setFlashMessage( "danger" , $errorMessage );
        }
        
        
        redirect($this->redirectUrl);
    }
    
    
    
    public function genrateInqiry(){
        
        $recordId = (!empty(getPostData('inquiry_record_id')) ? $this->anand_electrical->decode(getPostData('inquiry_record_id')) : "");
        $company = getPostData('company_name');
        
        $where = $data = [];
        $where['singleRecord'] = true;
        $where['im.i_id'] = $recordId;
        $data['inquiryDetils'] = $this->crud_model->getInquryDetails([], $where);
        $data['descriptionDetails']  = $this->crud_model->getDescriptionDetails( [ "inq.i_inquiry_master_id"  => $recordId ] );
        
        switch ($company){
            case ANAND :
                $html =  $this->load->view( "anand-pdf", $data , true );
                $image = '<div><img src="'. IMAGES_FOLDER . "unnati.jpeg" .'"></div>';
                
                break;
            case UNNATI :
                $html =  $this->load->view( "unnatiPdf", $data , true );
                $image = '<div><img src="'. IMAGES_FOLDER . "unnati.jpeg" .'"></div>';
                break;
                
        }
        
        $this->getPdf($html, $image);
    }
    
    public function getPdf($html = null , $image = null ){
        $mpdf = new Mpdf();
        $mpdf->SetHTMLHeader($image);
        $mpdf->SetWatermarkImage(IMAGES_FOLDER . "anand-logo.png",
            '',
            [100 , 100],
            );
        $mpdf->showWatermarkImage = true;
        
        $mpdf->AddPage('', // L - landscape, P - portrait
            '', '', '', '',
            10, // margin_left
            10, // margin right
            50, // margin top
            30, // margin bottom
            0, // margin header
            0); // margin footer
            $mpdf->WriteHTML($html);
            
            $mpdf->showImageErrors = true;
            $mpdf->Output('output.pdf', 'I'); // 'D' option for download
            die;
    }
    
    
}