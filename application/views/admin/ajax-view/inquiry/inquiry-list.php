 <?php 
 
 if(isset($recordDetails) && !empty($recordDetails)) {
        $pageNo = 1;
        $rowIndex = ( $pageNo - 1 )* PER_PAGE;
        
        
        foreach ($recordDetails as $recordDetail){
            $rowIndex++;
            $encodedId = (!empty($recordDetail->i_id) ? $this->anand_electrical->encode($recordDetail->i_id) : ""); 
            ?>
            
            	 <div class="single-leave-div">
					<div class="card mb-3">
                    	<div class="card-header d-flex align-items-center flex-wrap">
                            <span class="h4 serial-no mr-3 sr-no-col"><?php echo $rowIndex ?></span>
                            <span class="h4 person-name"><?php echo  str_replace("_", " ", $recordDetail->locality)  ?></span>
                            <span class="h5  float-right ml-auto"><?php echo $recordDetail->e_order_company ?></span>
                            	    
                	 </div>
                	 <div class="col-md-8 col-lg-10 d-flex flex-column">
                   		 <div class="btn-group no-caret great-dropdown-menu">
                              <button type="button"
                                class="btn dropdown-toggle"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-ellipsis-v"></i>
                              </button>
                              <div
                        class="dropdown-menu dropdown-menu-right property-status-div"
                      >
                        <a
                          href="https://www.propertyincity.com/demo/property/propertyPDF/502"
                          class="dropdown-item"
                          target="_blank"
                          ><i class="fas fa-fw fa-file-pdf d-nones"></i>
                          <span class="font-weight-semi-bold"
                            >Export PDF</span
                          ></a
                        >
                        <a
                          href="https://www.propertyincity.com/demo/property/editProperty/502"
                          class="dropdown-item"
                          ><i class="fas fa-fw fa-pencil-alt d-nones"></i>
                          <span class="font-weight-semi-bold">Edit</span></a
                        >
                        <button
                          class="dropdown-item"
                          data-record-id="502"
                          onclick="updateStatus(this)"
                        >
                          <i class="fas fa fa-eye-slash d-nones iconStatus"></i>
                          <span class="font-weight-semi-bold status"
                            >Inactive</span
                          >
                        </button>
                      </div>
                    </div>
                 </div>
        
                	 
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <div class="media">
                                    <span class="mr-3">
                                        <strong><?php echo $this->lang->line("inq-no")?></strong>
                                    </span>
                                    <div class="media-body status">
                                        <span><?php echo (!empty($recordDetail->v_inquiry_number) ? $recordDetail->v_inquiry_number : "")?></span>
                                    </div>
                                </div>
                            </div>
                           
                           <div class="col-lg-6 mb-3">
                                <div class="media">
                                    <span class="mr-3">
                                         <strong><?php echo $this->lang->line('inquiry-company')?></strong>
                                    </span>
                                    <div class="media-body status">
                                    	<?php 
                                    	   $inquiryCompany = (!empty($recordDetail->v_inquiry_company) ? explode(",",$recordDetail->v_inquiry_company ) : []);
                                    	   
                                    	   if(!empty($inquiryCompany)){
                                    	       foreach ($inquiryCompany as $company){
                                    	           ?>
                                    	           <span><?php echo $company ?></span><br>
                                    	           <?php 
                                    	       }
                                    	   }
                                    	?>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-lg-12 ">
                            
                            	<?php 
                            	
                            	if (in_array(ANAND, $inquiryCompany)){
                            	    ?>
                            	   		 <button title="<?php echo ANAND ?>" class="btn bg-theme text-white add-btn add-apply-modal-action-button" data-record-id="<?php echo $encodedId ?>" data-company="<?php echo ANAND ?>" onclick="genrateInqury(this)"><?php echo ANAND ?></button>
								    <?php 
                                }
                                
								if (in_array( UNNATI , $inquiryCompany)){
                            	    ?>
                            	    	<button title="<?php echo UNNATI ?>" class="btn btn-success text-white add-btn add-apply-modal-action-button" data-record-id="<?php echo $encodedId ?>" data-company="<?php echo UNNATI ?>" onclick="genrateInqury(this)"><?php echo UNNATI ?></button>
									<?php 
                                }
								
								if (in_array(KRUPAL, $inquiryCompany)){
                            	    ?>
                            	   <button title="<?php echo KRUPAL ?>" class="btn btn-warning text-white add-btn add-apply-modal-action-button" data-record-id="<?php echo $encodedId ?>" data-company="<?php echo KRUPAL ?>" onclick="genrateInqury(this)" ><?php echo KRUPAL ?></button>
								 <?php 
                                }
								?>
                            </div>
                            
                        </div>
            
    </div>
    </div>
    
                    </div>
                    
                          <?php 
        }
        
    
    
    
}else{
    ?>
    	<div>
    		<p class="text-center">  <?php echo $this->lang->line('no-record-found')?>  </p>
    	</div>
    <?php 
}

echo $this->load->view( "common-record-count" , [] , true );
    ?>
 			

                   