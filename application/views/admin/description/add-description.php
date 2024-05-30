<div class="breadcrumb-wrapper d-lg-flex p-3 border-bottom">
    <h1 class="h3 mb-lg-0 mr-3" id="pageTitle"><?php echo $pageTitle ?></h1>
    <nav aria-label="breadcrumb" class="d-flex mr-3">
        <ol class="breadcrumb bg-transparent p-0 mb-0 align-self-end">
            <li class="breadcrumb-item"><a href="https://www.propertyincity.com/demo/city/"><?php echo $this->lang->line("all-description")?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $this->lang->line("add-description")?></li>
        </ol>
    </nav>
</div>
<div class="container-fluid pt-3">
    <div class="card card-body mb-3 shadow-sm">
    <?php echo form_open( DESCRIPTION_DETAILS_MASTER_URL."add" , [ "id" => "description-form" , "method" => "post" ])?>
     
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="description_deatils"><?php echo $this->lang->line("description")?><span class="text-danger line-height">*</span>:</label>
                        <input type="text" class="form-control" id="description_deatils" name="description" placeholder="<?php echo $this->lang->line("description")?>" autofocus value="<?php echo  set_value('description' , ( isset($recordInfo) && !empty($recordInfo->v_description_details) ) ? $recordInfo->v_description_details  : "" )?>">
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
    $("#description-form").validate({
        errorClass: "invalid-input",
        rules: {
            description: {
                required: true,
                noSpace: true,
            },
          },
        messages: {
            description: {
                required: "<?php echo sprintf($this->lang->line('common-enter-filed-validation'), $this->lang->line('description')) ?>"
            },
           },
        submitHandler: function(form) {
            showLoader()
            form.submit();
        }
    });
</script>
