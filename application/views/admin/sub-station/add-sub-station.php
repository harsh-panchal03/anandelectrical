<div class="breadcrumb-wrapper d-lg-flex p-3 border-bottom">
    <h1 class="h3 mb-lg-0 mr-3" id="pageTitle"><?php echo $pageTitle ?></h1>
    <nav aria-label="breadcrumb" class="d-flex mr-3">
        <ol class="breadcrumb bg-transparent p-0 mb-0 align-self-end">
            <li class="breadcrumb-item"><a href="<?php echo SUB_STATION_URL ?>"><?php echo $this->lang->line("all-sub-station") ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $pageTitle ?></li>
        </ol>
    </nav>
</div>
<div class="container-fluid pt-3">
    <div class="card card-body mb-3 shadow-sm">
        
		<?php echo form_open(SUB_STATION_URL."add" , [ "id" => "addSubStationForm" , "method" => "post" ]) ?>
            <div class="row">
                
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="sub_station_engineer"><?php echo $this->lang->line('sub-station-engineer')?><span class="text-danger line-height">*</span>:</label>
                        <select class="form-control select2" id="sub_station_engineer" name="sub_station_engineer">
                            <option value=""><?php echo $this->lang->line("select")?></option>
                            <?php 
                                 if(!empty($engineerDetails)){
                                     foreach ($engineerDetails as $key => $engineerDetail){
                                         $selected = "";
                                         if(isset($recordInfo) && !empty($recordInfo->v_engineer_type) && $recordInfo->v_engineer_type == $key ){
                                             $selected = "selected";
                                         }
                                         
                                         ?>
                                         	<option value="<?php echo $key ?>" <?php echo $selected ?>><?php echo uperCaseWord($engineerDetail)?></option>
                                         <?php 
                                     }
                                 }
                            
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="sub_station_kv"><?php echo $this->lang->line('sub-station-kv')?><span class="text-danger line-height">*</span>:</label>
                        <select class="form-control select2" id="sub_station_kv" name="sub_station_kv">
                            <option value=""><?php echo $this->lang->line("select")?></option>
                            <?php 
                                if(!empty($subStationDetails)){
                                    foreach ($subStationDetails as $subStationKey => $subStationDetail){
                                        $encodedSubStationId = $this->anand_electrical->encode($subStationKey);
                                        $selected = "";
                                        if(isset($recordInfo) && !empty($recordInfo->v_sub_station_kv) && $recordInfo->v_sub_station_kv == $subStationKey ){
                                            $selected = "selected";
                                        }
                                        
                                        
                                         ?>
                                         	<option value="<?php echo $encodedSubStationId ?>" <?php echo $selected ?>><?php echo $subStationDetail ?></option>
                                         <?php 
                                     }
                                 }
                            
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="city"><?php echo $this->lang->line('city')?><span class="text-danger line-height">*</span>:</label>
                        <select class="form-control select2" id="city" name="city_id">
                            <option value=""><?php echo $this->lang->line("select")?></option>
                            <?php 
                                 if(!empty($cityDetails)){
                                     foreach ($cityDetails as  $cityDetail){
                                         $encodedCityId = $this->anand_electrical->encode($cityDetail->i_id);
                                         $selected = "";
                                         if(isset($recordInfo) && !empty($recordInfo->i_city_id) && $recordInfo->i_city_id == $cityDetail->i_id ){
                                             $selected = "selected";
                                         }
                                         
                                         ?>
                                         	<option value="<?php echo $encodedCityId ?>" <?php echo $selected ?> ><?php echo $cityDetail->v_city_name ?></option>
                                         <?php 
                                     }
                                 }
                            
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="locality"><?php echo $this->lang->line('locality')?><span class="text-danger line-height">*</span>:</label>
                        <select class="form-control select2" id="locality" name="locality_id">
                            <option value=""><?php echo $this->lang->line("select")?></option>
                            <?php 
                                 if(!empty($localityDetails)){
                                     foreach ($localityDetails as $localityDetail){
                                         $encodedLocalityId = $this->anand_electrical->encode($localityDetail->i_id);
                                         $selected = "";
                                         if(isset($recordInfo) && !empty($recordInfo->i_locality_id) && $recordInfo->i_locality_id == $localityDetail->i_id ){
                                             $selected = "selected";
                                         }
                                         
                                         ?>
                                         	<option value="<?php echo $encodedLocalityId ?>" <?php echo $selected ?>><?php echo $localityDetail->v_locality_name ?></option>
                                         <?php 
                                     }
                                 }
                            
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="pin_code"><?php echo $this->lang->line('pin-code')?>:</label>
                        <input type="text" class="form-control" id="pin_code" name="pin_code" placeholder="<?php echo $this->lang->line('pin-code')?>" value="<?php echo  set_value('pin_code' , ( isset($recordInfo) && !empty($recordInfo->v_pin_code) ? $recordInfo->v_pin_code  : ""))?>">
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="additional_details"><?php echo $this->lang->line('additional-sub-station-details')?>:</label>
                        <textarea class="form-control" id="additional_details" name="additional_details" placeholder="<?php echo $this->lang->line('additional-sub-station-details')?>"><?php echo ( ( isset($recordInfo) && !empty($recordInfo->v_sub_station_group) ) ? $recordInfo->v_sub_station_group : "" )?></textarea>
                         
                    </div>
                </div>
                
            <input type="hidden" name="record_id" value="<?php echo ( ( isset($recordInfo) && !empty($recordInfo->i_id) ) ?  $this->anand_electrical->encode( $recordInfo->i_id ) : "" )?>" />    
                <div class="col-md-12">
                    <button type="submit" class="btn bg-success text-white btn-wide"><?php echo $this->lang->line('submit')?></button>
                    <a href="<?php echo SUB_STATION_URL ?>" class="btn btn-outline-secondary btn-wide"><?php echo $this->lang->line("cancel")?></a>
                </div>
            </div>
            
        <?php echo form_close() ?>
    </div>
</div>
<script>
    $("#addSubStationForm").validate({
        errorClass: "invalid-input",
        rules: {
            sub_station_engineer: {
                required: true,
            },
            sub_station_kv: {
                required: true
            },
            city_id: {
                required: true,
            },
            locality_id: {
                required: true
            },
            
        },
        messages: {
           sub_station_engineer: {
                required: "<?php echo sprintf($this->lang->line('common-select-filed-validation'), $this->lang->line('sub-station-engineer'))?>",
            },
            sub_station_kv: {
                required: "<?php echo sprintf($this->lang->line('common-select-filed-validation'), $this->lang->line('sub-station-kv'))?>",
            },
            city_id: {
                required: "<?php echo sprintf($this->lang->line('common-select-filed-validation'), $this->lang->line('city'))?>",
            },
            locality_id: {
                required: "<?php echo sprintf($this->lang->line('common-select-filed-validation'), $this->lang->line('locality'))?>",
            },
        },
        submitHandler: function(form) {
            showLoader()
            form.submit();
        }
    });
</script>
</div>

</div>