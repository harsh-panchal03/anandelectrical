

<div class="breadcrumb-wrapper d-lg-flex p-3 border-bottom">
    <h1 class="h3 mb-lg-0 mr-3" id="pageTitle"><?php echo $this->lang->line("locality") ?>( <span id="total-record-count" ></span> )</h1>
    <div class="ml-auto text-right">
        <a href="<?php echo LOCALITY_URL . "showAddForm"?>" class="btn btn-light text-dark border btn-sm mr-2" title="<?php echo $this->lang->line('add-locality')?>"><i class="fas fa-plus"></i><?php echo $this->lang->line('add-locality')?></a>
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
                        <label class="control-label" for="locality_name"><?php echo $this->lang->line('locality-name')?></label>
                        <select class="form-control select2" id="search_locality" name="search_locality" onchange="filterData()">
                           <option value=""><?php echo $this->lang->line("select")?></option>
                            <?php 
                            if(!empty($localityDetails)){
                                foreach ($localityDetails as $key => $localityDetail){
                                    $key = $this->anand_electrical->encode($localityDetail->i_id);
                                         ?>
                                         	<option value="<?php echo $key ?>"><?php echo $localityDetail->v_locality_name ?></option>
                                         <?php 
                                     }
                                 }
                            
                            ?>
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
    <div class="dropdown hierarchy-select" id="example-one">
    <button type="button" class="btn btn-secondary dropdown-toggle" id="example-one-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
    <div class="dropdown-menu" aria-labelledby="example-one-button">
        <div class="hs-searchbox">
            <input type="text" class="form-control" autocomplete="off">
        </div>
        <div class="hs-menu-inner">
            <a class="dropdown-item" data-value="" data-level="1" data-default-selected="" href="#">All categories</a>
           <?php echo $newHtml ?>
        </div>
    </div>
    <input class="d-none" name="example_one" readonly="readonly" aria-hidden="true" type="text"/>
</div>
    <div class="filter-result-wrapper">
        <h3 class="h4 mb-3"><?php echo $this->lang->line("all-locality")?></h3>
        <div class="card card-body shadow-sm">
            <div class="table-responsive">
                <table class="table table-sm table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="sr-col"> <?php echo $this->lang->line("sr-no")?> Sr. No.</th>
                            <th class="text-center"><?php echo $this->lang->line("locality")?></th>
                            <th class="text-center"><?php echo $this->lang->line("city")?></th>
                            <th class="text-center"><?php echo $this->lang->line("status")?></th>
                            <th class="actions-col"><?php echo $this->lang->line("actions")?></th>
                        </tr>
                    </thead>
                    <tbody class="ajax-view">
                    <?php echo $this->load->view( AJAX_FOLDER."locality/locality-list" , [] , true); ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script>
$('#example-one').hierarchySelect({
    width: 'auto'
});
var paginationUrl = "<?php echo LOCALITY_URL. "filter"; ?>";

function searchFiled(){
    var searchData = {
    	
    	search_city : $.trim($("[name='search_city']").val()),
    	search_locality : $.trim($("[name='search_locality']").val()),
    
    };
    
    return searchData;

    
}

function filterData(){	

	var searchFieldName = searchFiled();
	searchAjax(paginationUrl , searchFieldName);
}


</script>
<?php echo $this->load->view( ADMIN_FOLDER."srcoll-based-pagination" , [] , true ) ?>