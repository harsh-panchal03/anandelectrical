<div class="breadcrumb-wrapper d-lg-flex p-3 border-bottom">
	<h1 class="h3 mb-lg-0 mr-3" id="pageTitle"><?php echo $pageTitle ?></h1>
	<nav aria-label="breadcrumb" class="d-flex mr-3">
		<ol class="breadcrumb bg-transparent p-0 mb-0 align-self-end">
			<li class="breadcrumb-item"><a href="<?php echo INQUIRY_MASTER_URL ?>"><?php echo $this->lang->line("all-inquiry") ?></a></li>
			<li class="breadcrumb-item active" aria-current="page"><?php echo $this->lang->line("add-inquiry") ?></li>
		</ol>
	</nav>
</div>
<div class="container-fluid pt-3">
	<div class="card card-body mb-3 shadow-sm">
		<?php echo form_open(INQUIRY_MASTER_URL . "add", ["id" => "add-inquiry-form", "method" => "post"]) ?>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="control-label" for="inquiry_no"><?php echo $this->lang->line("inquiry-no") ?><span class="text-danger line-height">*</span>:</label>
					<input type="text" class="form-control" id="inquiry_no" name="inquiry_no" placeholder="<?php echo $this->lang->line("inquiry-no") ?>" autofocus value="<?php echo  set_value('locality_name', (isset($recordInfo) && !empty($recordInfo->v_locality_name)) ? $recordInfo->v_locality_name  : "") ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label class="control-label" for="city_id"><?php echo $this->lang->line("sub-station") ?><span class="text-danger line-height">*</span>:</label>
					<select class="form-control select2" id="city_id" name="city_id">
						<option value=""><?php echo $this->lang->line("select") ?></option>
						<?php if (!empty($subStationDetails)) {

							$subStationId = ((isset($recordInfo) && !empty($recordInfo->i_id)) ? $recordInfo->i_id : 0);
							foreach ($subStationDetails as $subStationDetail) {
								$selected = "";

								if (!empty($subStationId) && $subStationId == $subStationDetail->i_id) {
									$selected =  "selected='selected'";
								}

								$encodeId = (!empty($subStationDetail->i_id) ? $this->anand_electrical->encode($subStationDetail->i_id) : "");
						?>
								<option value="<?php echo $encodeId ?>" <?php echo $selected ?>> <?php echo $subStationDetail->locality ?> </option>
						<?php
							}
						} ?>

					</select>
				</div>
			</div>

			<div class="col-md-12">
				<label class="control-label"><?php echo $this->lang->line('inquiry-company') ?></label>
				<div class="radio-boxes row p-1 bg-white rounded mb-3">
					<?php
					if (isset($companyDetails) && !empty($companyDetails)) {
						foreach ($companyDetails as $companyDetail) { ?>
							<div class="radio-box col-md-3 col-3 mb-2">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="order_company" id="<?php echo $companyDetail . "_order" ?>" value="<?php echo $companyDetail ?>">
									<label class="form-check-label custom-type-label" for="<?php echo $companyDetail . "_order" ?>"><?php echo $companyDetail ?></label>
								</div>
							</div>
					<?php }
					} ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="mt-3">
					<label class="control-label"><?php echo $this->lang->line('inquiry-company') ?></label>
					<div class="form-group d-flex align-items-center flex-wrap">
						<?php
						if (isset($companyDetails) && !empty($companyDetails)) {
							foreach ($companyDetails as $companyDetail) { ?>
								<div class="pt-2">
									<div class="custom-control custom-checkbox custom-control-inline d-block mb-1">
										<input type="checkbox" id="<?php echo $companyDetail ?>" name="inquiry_company[]" value="<?php echo $companyDetail ?>" class="custom-control-input" onclick="showInquiryDate(this)">
										<label class="custom-control-label" for="<?php echo $companyDetail ?>"><?php echo $companyDetail ?></label>
									</div>
								</div>
						<?php }
						} ?>
					</div>
				</div>
			</div>
			
			<div class="col-md-3 anand-inquiry-date inquiry-date"   style="display:none" >
				<div class="form-group">
					<label class="control-label" for="anand_inquiry_date"><?php echo $this->lang->line('anand-inquiry-date')?></label> 
					<input type="text" class="form-control" id="anand_inquiry_date" name="anand_inquiry_date" placeholder="<?php echo DEFAULT_DATE_FORMATE ?>">
				</div>
			</div>
			
			<div class="col-md-3 unnati-inquiry-date inquiry-date" style="display:none" >
				<div class="form-group">
					<label class="control-label" for="unnati_inquiry_date"><?php echo $this->lang->line('unnati-inquiry-date')?></label> 
					<input type="text" class="form-control" id="unnati_inquiry_date"  name="unnati_inquiry_date" placeholder="<?php echo DEFAULT_DATE_FORMATE ?>">
				</div>
			</div>
			
			<div class="col-md-3 bhavesh-inquiry-date inquiry-date"  style="display:none">
				<div class="form-group">
					<label class="control-label" for="bhavesh_inquiry_date"><?php echo $this->lang->line('bhavesh-inquiry-date')?></label> 
					<input type="text" class="form-control" id="bhavesh_inquiry_date" name="bhavesh_inquiry_date" placeholder="<?php echo DEFAULT_DATE_FORMATE ?>">
				</div>
			</div>
			
			<div class="col-md-3 krupal-inquiry-date inquiry-date" style="display:none" >
				<div class="form-group">
					<label class="control-label" for="krupal_inquiry_date"><?php echo $this->lang->line('krupal-inquiry-date')?></label> 
					<input type="text" class="form-control" id="krupal_inquiry_date" name="krupal_inquiry_date" placeholder="<?php echo DEFAULT_DATE_FORMATE ?>">
				</div>
			</div>
					
			
			
			
			<div class="col-md-12">
				<div class="card">
					<div class="card-header commn-header-color">
						<div class="d-flex align-items-center">
							<h5 class="mb-0 text-theme font-weight-bold"><?php $this->lang->line('inquiry-details') ?></h5>
							<button class="btn bg-theme text-white btn-sm ml-auto" onclick="addNewDescription(this);" title="<?php echo $this->lang->line('add') ?>" type="button"><i class="fas fa-plus text-white"></i> </button>
						</div>
					</div>

					<div class="card-body">
						<table class="table table-sm table-bordered mb-1">
							<thead>
								<tr>
									<th class="w-180" style="width:253px"><?php echo  $this->lang->line('description') ?></th>
									<th class="w-120"><?php echo $this->lang->line('anand-rate')?></th>
									<th class="w-180"><?php echo $this->lang->line('unnati-rate')?></th>
									<th class="w-180"><?php echo $this->lang->line('bhavesh-rate')?></th>
									<th class="w-180"><?php echo $this->lang->line('per')?></th>
									<th class="text-center"><?php echo $this->lang->line('actions')?></th>
								</tr>
							</thead>
							<tbody class="other-mobile-div">
								<tr class="person-detail-tr other-mobile-row">
								<td>
									<select class="form-control select2" id="description_1" name="description_1">
										<option value=""><?php echo $this->lang->line("select") ?></option>
									<?php 
    									if(!empty($itemDetails)){
    									    foreach ($itemDetails as $itemDetail){
    									        $encodeId = (!empty($itemDetail->i_id) ? $this->anand_electrical->encode($itemDetail->i_id) : "");
    									     ?>
    									        <option value="<?php echo $encodeId ?>"><?php echo $itemDetail->v_description_details ?></option>
    									    <?php 
    									    }
    									}
									?>
									</select>
								</td>
								<td>
									<input type="text" class="form-control"  onkeyup="onlyNumber(this);"  name="anand_rate_1">
								</td>
								<td>
									<input type="text" class="form-control" onkeyup="onlyNumber(this);" name="unnati_rate_1">
								</td>
								<td>
									<input type="text" class="form-control"  onkeyup="onlyNumber(this);" name="bhavesh_rate_1">
								</td>
								<td>
									<select class="form-control select2" id="unit_1" name="unit_1">
										<option value=""><?php echo $this->lang->line("select") ?></option>
										<?php 
    									
    									if(!empty($unitDetails)){
    									    foreach ($unitDetails as $unitDetail){
    									      ?>
    									      <option value="<?php echo $unitDetail ?>"><?php echo $unitDetail ?></option>
    									      <?php   
    									    }
    									}
    									?>
    									</select>
								</td>
								<td class="text-center">
									<button type="button" onclick="deleteSecondaryInfo(this)" title="<?php echo $this->lang->line('delete')?>" class="btn btn-danger btn-sm"><i class="fa fa-trash fa-fw"></i> </button>
								</td>
							</tr>
							
						</table>
					</div>
				</div>

			</div>
			<div class="col-md-12">
				<button type="submit" class="btn bg-success text-white btn-wide"><?php echo $this->lang->line("submit") ?></button>
				<a href="<?php echo INQUIRY_MASTER_URL ?>" class="btn btn-outline-secondary btn-wide"><?php echo $this->lang->line('cancel') ?></a>
			</div>
			<input type="hidden" name="count_for_description" value="1" >
			<input type="hidden" name="record_id" value="<?php echo ((isset($recordInfo) && !empty($recordInfo->i_id)) ? $this->anand_electrical->encode($recordInfo->i_id) : null) ?>">
			<?php echo form_close() ?>
		</div>
	</div>
	<script>
		function showInquiryDate(thisitem){
			
			var check_box_value = $.trim($(thisitem).val());
			var is_checked = $(thisitem).is(":checked");
			var class_name = "";
			
			switch(check_box_value){
				case "<?php echo ANAND?>" : 
					class_name = "anand-inquiry-date"
					break; 
				case "<?php echo UNNATI?>" : 
					class_name = "unnati-inquiry-date"
					break; 
				/* case "<?php echo KRUPAL?>" : 
					class_name = "krupal-inquiry-date"
					break; 
				*/
				case "<?php echo BHAVESH?>" : 
					class_name = "bhavesh-inquiry-date"
					break; 
			}
			
			if(class_name != "" && class_name != null){
				if(is_checked == true){
				 	$("."+ class_name +" ").show();
				}else{
					$("."+ class_name +" ").hide();
					$("."+ class_name +" ").val();
				}			
			}
			
		}

		function deleteSecondaryInfo(thisitem) {
			alertify.confirm(
				messages["delete_inquiry_row"],
				messages["delete_row"],
				function() {
					$(thisitem).parents('.other-mobile-row').remove();
				},
				function() {}
			);
		}

		var inquiry_details_add_count = 1;
		function addNewDescription(thisitem){
			
			inquiry_details_add_count++;

			var html = "";
			html += '<tr class="person-detail-tr other-mobile-row" >';
			html += '<td>';
			html += '<select class="form-control select2" id="description_'+inquiry_details_add_count +'" name="description_'+inquiry_details_add_count+'">'
			html += '<option value=""><?php echo $this->lang->line("select") ?></option>';
			<?php 
				if(!empty($itemDetails)){
					foreach($itemDetails as $itemDetail){
						$encodeId = (!empty($itemDetail->i_id) ? $this->anand_electrical->encode($itemDetail->i_id) : "");
    									    
						?>
					html += '<option value="<?php echo $encodeId ?>"><?php echo $itemDetail->v_description_details ?></option>';
						<?php
					}
				}
			?>


			html += "</td>";

			html += "<td>";
			html += '	<input type="text" class="form-control"  onkeyup="onlyNumber(this);"  name="anand_rate_'+inquiry_details_add_count+'">';
			html += "</td>";
			
			
			html += "<td>";
			html += '	<input type="text" class="form-control"  onkeyup="onlyNumber(this);"  name="unnati_rate_'+inquiry_details_add_count+'">';
			html += "</td>";

			
			html += "<td>";
			html += '	<input type="text" class="form-control"  onkeyup="onlyNumber(this);"  name="bhavesh_rate_'+inquiry_details_add_count+'">';
			html += "</td>";

			html += '<td>';
			html += '<select class="form-control select2" id="unit_'+inquiry_details_add_count +'" name="unit_'+inquiry_details_add_count+'">'
			html += '<option value=""><?php echo $this->lang->line("select") ?></option>';
			<?php 
				if(!empty($unitDetails)){
					foreach($unitDetails as $unitDetails){
									    
						?>
					html += '<option value="<?php echo $unitDetail ?>"><?php echo $unitDetails ?></option>';
						<?php
					}
				}
			?>


			html += '<td class="text-center">';
			html += '<button type="button" onclick="deleteSecondaryInfo(this)" title="<?php echo $this->lang->line('delete')?>" class="btn btn-danger btn-sm"><i class="fa fa-trash fa-fw"></i> </button>';
			html += '</td>';
			html += '</tr>';
							
								
							
			if ($('.other-mobile-div').find('.other-mobile-row').length > 0) {
				$(html).insertAfter($('.other-mobile-div').find('.other-mobile-row:last'));
			} else {
				$('.other-mobile-div').html(html);
			}
			$('.select2').select2();
			$('[name="count_for_description"]').val(inquiry_details_add_count);

		}
		$(document).ready(function() {
		
		$(function() {
		$('[name="anand_inquiry_date"],[name="unnati_inquiry_date"],[name="bhavesh_inquiry_date"]' ).datetimepicker({
			useCurrent: false,
			viewMode: 'days',
			ignoreReadonly: true,
			format: 'DD-MM-YYYY',
			maxDate: moment().endOf('day'),
			showClear: true,
	        showClose: true,
            icons: {
                clear: 'fa fa-trash',
                Close: 'fa fa-trash',
	        },
		});
	});
	});
		

	</script>