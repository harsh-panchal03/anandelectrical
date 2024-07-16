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
    <?php echo form_open( CITY_URL."add" , [ "id" => "city-form" , "method" => "post" ])?>
     
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="city_name"><?php echo $this->lang->line("city-name")?><span class="text-danger line-height">*</span>:</label>
                        <input type="text" class="form-control" id="city_name" name="city_name" placeholder="<?php echo $this->lang->line("city-name")?>" autofocus value="<?php echo  set_value('city_name' , ( isset($recordInfo) && !empty($recordInfo->v_city_name) ) ? $recordInfo->v_city_name  : "" )?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="state_id">State<span class="text-danger line-height">*</span>:</label>
                        <select class="form-control select2" id="state" name="state">
                            <option value=""><?php echo $this->lang->line("select")?></option>
                            <?php if(!empty($stateDetails)){
                                
                                $stateId = ( ( isset($recordInfo) && !empty($recordInfo->i_state_id) ) ? $recordInfo->i_state_id : 0);
                                foreach ($stateDetails as $key => $stateDetail){
                                    $selected = "";
                                    
                                    if(!empty($stateId) && $stateId == $key){
                                        $selected =  "selected='selected'";
                                    }
                                    
                                    $encodeId = ( !empty($key) ? $this->anand_electrical->encode($key) : "" );
                                    ?>
                                    <option value="<?php echo $encodeId ?>" <?php echo $selected ?>> <?php echo $stateDetail ?> </option>
                                    <?php 
                                }
                            }?>
                            
                        </select>
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
