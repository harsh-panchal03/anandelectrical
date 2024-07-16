<div class="breadcrumb-wrapper d-lg-flex p-3 border-bottom">
    <h1 class="h3 mb-lg-0 mr-3" id="pageTitle"><?php echo $this->lang->line("manage-sub-station") ?>( <span id="total-record-count" ></span> )</h1>
    <div class="ml-auto text-right">
        <a href="<?php echo SUB_STATION_URL . "showAddForm"?>" class="btn btn-light text-dark border btn-sm mr-2" title="<?php echo $this->lang->line('add-sub-station')?>"><i class="fas fa-plus"></i><?php echo $this->lang->line('add-sub-station')?></a>
        <button class="btn btn-light border btn-sm" data-toggle="collapse" data-target="#searchFilter" title="Toggle Filter"><i class="fas fa-filter"></i><?php echo $this->lang->line('filter')?></button>
    </div>
</div>
<div class="container-fluid pt-3">
<?php echo $this->session->flashdata("myMessage")?>
    <div class="collapse" id="searchFilter">
        <div class="card card-body border-0 shadow mb-4">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="city_name"><?php echo $this->lang->line('city-name')?></label>
                        <select class="form-control select2" id="search_city" name="search_city" onchange="filterData()">
                           <option value=""><?php echo $this->lang->line("select")?></option>
                            <?php 
                            if(!empty($cityDetails)){
                                foreach ($cityDetails as $key => $cityDetail){
                                    $key = $this->anand_electrical->encode($cityDetail->i_id);
                                         ?>
                                         	<option value="<?php echo $key ?>"><?php echo $cityDetail->v_city_name ?></option>
                                         <?php 
                                     }
                                 }
                            
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="search_engineer"><?php echo $this->lang->line('sub-station-engineer')?></label>
                        <select class="form-control select2" id="search_engineer" name="search_engineer" onchange="filterData()">
                           <option value=""><?php echo $this->lang->line("select")?></option>
                            <?php 
                                 if(!empty($engineerDetails)){
                                     foreach ($engineerDetails as $key => $engineerDetail){
                                         ?>
                                         	<option value="<?php echo $key ?>"><?php echo uperCaseWord($engineerDetail)?></option>
                                         <?php 
                                     }
                                 }
                            
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="status"><?php echo $this->lang->line('status') ?></label>
                        <select class="form-control" id="status" name="search_status" onchange="filterData()">
                            <option value=""><?php echo $this->lang->line('select')?></option>
                            <option value="<?php echo  ACTIVE_STATUS_TEXT?>"><?php echo ACTIVE_STATUS_TEXT ?></option>
                            <option value="<?php echo  INACTIVE_STATUS_TEXT ?>"><?php echo INACTIVE_STATUS_TEXT?></option>
                        </select>
                    </div>
                </div>
                <div class="col-md pt-lg-2  mt-md-4 mt-lg-0">
                    <button type="button" onclick="filterData()" class="btn btn-info mt-lg-3"><?php echo $this->lang->line('search')?></button>
                    <button class="btn btn-outline-secondary reset-wild-tigers mt-lg-3"><?php echo $this->lang->line('reset')?></button>
                </div>
            </div>
        </div>
    </div>
    <div class="filter-result-wrapper">
        <h3 class="h4 mb-3"><?php echo $this->lang->line("all-sub-stations")?></h3>
        <div class="card card-body shadow-sm">
            <div class="table-responsive">
                <table class="table table-sm table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="sr-col"> <?php echo $this->lang->line("sr-no")?> Sr. No.</th>
                            <th class="text-center"><?php echo $this->lang->line("sub-station-engineer")?></th>
                            <th class="text-center"><?php echo $this->lang->line("sub-station-kv")?></th>
                            <th class="text-center"><?php echo $this->lang->line("locality")?></th>
                            <th class="text-center"><?php echo $this->lang->line("city")?></th>
                            <th class="text-center"><?php echo $this->lang->line("pin-code")?></th>
                            <th class="text-center"><?php echo $this->lang->line("status")?></th>
                            <th class="actions-col"><?php echo $this->lang->line("actions")?></th>
                        </tr>
                    </thead>
                    <tbody class="ajax-view">
                    <?php echo $this->load->view( AJAX_FOLDER."sub-station/sub-station-list" , [] , true); ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script>


var sub_station_url = "<?php echo SUB_STATION_URL ?>";
var paginationUrl = sub_station_url +  "filter";

function searchFiled(){
    
    var searchData = {};
    
    searchData.search_status = $.trim($("[name='search_status']").val());
    searchData.search_engineer = $.trim($("[name='search_engineer']").val());
    searchData.search_city = $.trim($("[name='search_city']").val());
    return searchData;

    
}


function filterData(){


	var searchFieldName = searchFiled();
	
	
	searchAjax(sub_station_url + 'filter', searchFieldName);
	


}



</script>
<?php echo $this->load->view( ADMIN_FOLDER."srcoll-based-pagination" , [] , true ) ?>