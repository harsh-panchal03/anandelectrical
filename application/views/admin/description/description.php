<div class="breadcrumb-wrapper d-lg-flex p-3 border-bottom">
    <h1 class="h3 mb-lg-0 mr-3" id="pageTitle"><?php echo $this->lang->line("description") ?>( <span id="total-record-count" ></span> )</h1>
    <div class="ml-auto text-right">
        <a href="<?php echo DESCRIPTION_DETAILS_MASTER_URL . "showAddForm"?>" class="btn btn-light text-dark border btn-sm mr-2" title="<?php echo $this->lang->line('add-description')?>"><i class="fas fa-plus"></i><?php echo $this->lang->line('add-description')?></a>
        <button class="btn btn-light border btn-sm" data-toggle="collapse" data-target="#searchFilter" title="Toggle Filter"><i class="fas fa-filter"></i><?php echo $this->lang->line('filter')?></button>
    </div>
</div>
<div class="container-fluid pt-3">
<?php echo $this->session->flashdata("myMessage")?>
    <div class="collapse" id="searchFilter">
        <div class="card card-body border-0 shadow mb-4">
            <div class="row">
               
            </div>
        </div>
    </div>
    <div class="filter-result-wrapper">
        <h3 class="h4 mb-3"><?php echo $this->lang->line("all-description")?></h3>
        <div class="card card-body shadow-sm">
            <div class="table-responsive">
                <table class="table table-sm table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="sr-col"> <?php echo $this->lang->line("sr-no")?> Sr. No.</th>
                            <th class="text-center"><?php echo $this->lang->line("description")?></th>
                            <th class="text-center"><?php echo $this->lang->line("status")?></th>
                            <th class="actions-col"><?php echo $this->lang->line("actions")?></th>
                        </tr>
                    </thead>
                    <tbody class="ajax-view">
                    <?php echo $this->load->view( AJAX_FOLDER."description/description-list" , [] , true); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script>
var description_url = "<?php echo DESCRIPTION_DETAILS_MASTER_URL ?>";
var paginationUrl = description_url +  "filter";

function searchFiled(){
    
    var searchData = {};
    
    
    return searchData;

    
}


function filterData(){


	var searchFieldName = searchFiled();
	
	
	searchAjax(description_url + 'filter', searchFieldName);
	


}



</script>
<?php echo $this->load->view( ADMIN_FOLDER."srcoll-based-pagination" , [] , true ) ?>