<div class="breadcrumb-wrapper d-lg-flex p-3 border-bottom">
    <h1 class="h3 mb-lg-0 mr-3" id="pageTitle"><?php echo $pageTitle ?></h1>
    <nav aria-label="breadcrumb" class="d-flex mr-3">
        <ol class="breadcrumb bg-transparent p-0 mb-0 align-self-end">
            <li class="breadcrumb-item"><a href="https://www.propertyincity.com/demo/city/"><?php echo $this->lang->line("all-city")?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $this->lang->line("add-city")?></li>
        </ol>
    </nav>
</div>
<div class="container-fluid pt-3">
    <div class="card card-body mb-3 shadow-sm">
    <?php echo form_open( VENDOR_MASTER_URL."add" , [ "id" => "vendor-form" , "method" => "post" ])?>
     
            <div class="row">
            
            <div class="col-md-6">
				<label class="control-label"><?php echo $this->lang->line('vendor-type') ?></label>
				<div class="radio-boxes row p-1 bg-white rounded mb-3">
					<div class="radio-box col-md-3 col-3 mb-2">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="order_company" id="sell_purpose" value="<?php echo "sell" ?>">
							<label class="form-check-label custom-type-label" for="sell_purpose"><?php echo "sell" ?></label>
						</div>
					</div>
					<div class="radio-box col-md-3 col-3 mb-2">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="order_company" id="purchase_purpose" value="<?php echo "Purchase" ?>">
							<label class="form-check-label custom-type-label" for="purchase_purpose"><?php echo "Purchase" ?></label>
						</div>
					</div>
				
				</div>
			</div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="city_name"><?php echo $this->lang->line("vendor-name")?><span class="text-danger line-height">*</span>:</label>
                        <input type="text" class="form-control" id="vendor_name" name="vendor_name" placeholder="<?php echo $this->lang->line("vendor-name")?>" autofocus value="<?php echo  set_value('vendor_name' , ( isset($recordInfo) && !empty($recordInfo->v_vendor_name) ) ? $recordInfo->v_vendor_name  : "" )?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="vendor_person_name"><?php echo $this->lang->line("vendor-person-name")?><span class="text-danger line-height">*</span>:</label>
                        <input type="text" class="form-control" id="vendor_person_name" name="vendor_person_name" placeholder="<?php echo $this->lang->line("vendor-person-name")?>"  value="<?php echo  set_value('vendor_person_name' , ( isset($recordInfo) && !empty($recordInfo->v_vendor_person_name) ) ? $recordInfo->v_vendor_person_name  : "" )?>">
                    </div>
                </div>
                
                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="vendor_number"><?php echo $this->lang->line("vendor-number")?><span class="text-danger line-height">*</span>:</label>
                        <input type="text" class="form-control" id="vendor_number" name="vendor_number" placeholder="<?php echo $this->lang->line("vendor-number")?>"  value="<?php echo  set_value('vendor_number' , ( isset($recordInfo) && !empty($recordInfo->v_vendor_number) ) ? $recordInfo->v_vendor_number  : "" )?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="vendor_gst_number"><?php echo $this->lang->line("vendor-gst-number")?><span class="text-danger line-height">*</span>:</label>
                        <input type="text" class="form-control" id="vendor_gst_number" name="vendor_gst_number" placeholder="<?php echo $this->lang->line("vendor-gst-number")?>"  value="<?php echo  set_value('vendor_number' , ( isset($recordInfo) && !empty($recordInfo->v_vendor_number) ) ? $recordInfo->v_vendor_number  : "" )?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="vendor_address"><?php echo $this->lang->line("vendor-address")?><span class="text-danger line-height">*</span>:</label>
                        <textarea class="form-control" id="vendor_address" name="vendor_address" placeholder="<?php echo $this->lang->line("vendor-address")?>"><?php echo ( ( isset($recordInfo) && !empty($recordInfo->v_vendor_address) ) ? $recordInfo->v_vendor_address : "" )?></textarea>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <button type="submit" class="btn bg-success text-white btn-wide"><?php echo $this->lang->line("submit")?></button>
                    <a href="<?php echo CITY_URL ?>" class="btn btn-outline-secondary btn-wide"><?php echo $this->lang->line('cancel')?></a>
                </div>
            </div>
            <input type="hidden" name="record_id" value="<?php echo ( (isset($recordInfo) && !empty($recordInfo->i_id) ) ? $this->anand_electrical->encode($recordInfo->i_id) : null)?>">
        <?php echo form_close()?>
    </div>
</div>
<script>
    $("#city-form").validate({
        errorClass: "invalid-input",
        rules: {
            city_name: {
                required: true,
                noSpace: true,
                validateCity: true
            },
            state: {
                required: true
            },
        },
        messages: {
            city_name: {
                required: "<?php echo sprintf($this->lang->line('common-select-filed-validation'), $this->lang->line('city-name')) ?>"
            },
            state: {
                required: "<?php echo sprintf($this->lang->line('common-select-filed-validation'), $this->lang->line('state')) ?>"
            },
        },
        submitHandler: function(form) {
            showLoader()
            form.submit();
        }
    });
</script>
