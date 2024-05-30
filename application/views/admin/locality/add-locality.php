<div class="breadcrumb-wrapper d-lg-flex p-3 border-bottom">
    <h1 class="h3 mb-lg-0 mr-3" id="pageTitle"><?php echo $pageTitle ?></h1>
    <nav aria-label="breadcrumb" class="d-flex mr-3">
        <ol class="breadcrumb bg-transparent p-0 mb-0 align-self-end">
            <li class="breadcrumb-item"><a href="<?php echo LOCALITY_URL ?>"><?php echo $this->lang->line("all-locality")?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $this->lang->line("add-locality")?></li>
        </ol>
    </nav>
</div>
<div class="container-fluid pt-3">
    <div class="card card-body mb-3 shadow-sm">
    <?php echo form_open( LOCALITY_URL."add" , [ "id" => "locality-form" , "method" => "post" ])?>
     
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="city_name"><?php echo $this->lang->line("locality-name")?><span class="text-danger line-height">*</span>:</label>
                        <input type="text" class="form-control" id="locality_name" name="locality_name" placeholder="<?php echo $this->lang->line("locality-name")?>" autofocus value="<?php echo  set_value('locality_name' , ( isset($recordInfo) && !empty($recordInfo->v_locality_name) ) ? $recordInfo->v_locality_name  : "" )?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="city_id"><?php echo $this->lang->line("city-name")?><span class="text-danger line-height">*</span>:</label>
                        <select class="form-control select2" id="city_id" name="city_id">
                            <option value=""><?php echo $this->lang->line("select")?></option>
                            <?php if(!empty($cityDetails)){
                                
                                $cityId = ( ( isset($recordInfo) && !empty($recordInfo->i_city_id) ) ? $recordInfo->i_city_id : 0);
                                foreach ($cityDetails as $cityDetail){
                                    $selected = "";
                                    
                                    if(!empty($cityId) && $cityId == $cityDetail->i_id){
                                        $selected =  "selected='selected'";
                                    }
                                    
                                    $encodeId = ( !empty($cityDetail->i_id) ? $this->anand_electrical->encode($cityDetail->i_id) : "" );
                                    ?>
                                    <option value="<?php echo $encodeId ?>" <?php echo $selected ?>> <?php echo $cityDetail->v_city_name ?> </option>
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
    $("#locality-form").validate({
        errorClass: "invalid-input",
        rules: {
            locality_name: {
                required: true,
                noSpace: true,
//                 validateCity: true
            },
            city_id: {
                required: true
            },
        },
        messages: {
            locality_name: {
                required: "<?php echo sprintf($this->lang->line('common-select-filed-validation'), $this->lang->line('locality-name')) ?>"
            },
            city_id: {
                required: "<?php echo sprintf($this->lang->line('common-select-filed-validation'), $this->lang->line('city-name')) ?>"
            },
        },
        submitHandler: function(form) {
            showLoader()
            form.submit();
        }
    });
</script>
