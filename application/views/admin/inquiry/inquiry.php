<div class="breadcrumb-wrapper d-lg-flex p-3 border-bottom">
    <h1 class="h3 mb-lg-0 mr-3" id="pageTitle"><?php echo $this->lang->line("inquiry") ?>( <span id="total-record-count" ></span> )</h1>
    <div class="ml-auto text-right">
        <a href="<?php echo INQUIRY_MASTER_URL . "showAddForm"?>" class="btn btn-light text-dark border btn-sm mr-2" title="<?php echo $this->lang->line('add-inquiry')?>"><i class="fas fa-plus"></i><?php echo $this->lang->line('add-inquiry')?></a>
        <button class="btn btn-light border btn-sm" data-toggle="collapse" data-target="#searchFilter" title="Toggle Filter"><i class="fas fa-filter"></i><?php echo $this->lang->line('filter')?></button>
    </div>
</div>
<?php echo $this->session->flashdata("myMessage")?>
<div class="container-fluid pt-3" id="page">
	<div class="card mb-3">
        <div class="card-body px-3 py-3">
        <?php echo $this->load->view(AJAX_FOLDER . "inquiry/inquiry-list" , [] ,true)?>
        </div>
    </div>
</div>


<?php echo form_open(INQUIRY_MASTER_URL."genrateInqiry" , [ "id" => "genrate-inquiry-form" , "method" => "post"] )  ?>
<input name="inquiry_record_id" type="hidden">
<input name="company_name" type="hidden">

<?php form_close()?>

<script>


function genrateInqury(thisitem){
 
 var record_id = $.trim($(thisitem).attr('data-record-id'));
 var company = $.trim($(thisitem).attr('data-company'));
 console.log(record_id);
  if( record_id != "" && record_id != null){
  console.log("asdasd");
	$('#genrate-inquiry-form').find('[name="inquiry_record_id"]').val(record_id);
	$('#genrate-inquiry-form').find('[name="company_name"]').val(company);
	$("#genrate-inquiry-form").submit();
  }

 
}


</script>