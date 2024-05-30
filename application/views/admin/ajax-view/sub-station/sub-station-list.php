<?php 

if(isset($recordDetails) && !empty($recordDetails)) {
    
    $rowIndex = ( $pageNo - 1 )* PER_PAGE;
    
    
    foreach ($recordDetails as $recordDetail){
        
        
        $encodeId = $this->anand_electrical->encode ( $recordDetail->i_id );
        
        $status = $this->lang->line('active');
        
        if(isset($recordDetail->t_is_active) && $recordDetail->t_is_active == INACTIVE_STATUS){
            $status = $this->lang->line('inactive');
        }
        
        ?>
        	<tr>
                <td class="sr-col"><?php echo ++$rowIndex ?></td>
                <td><?php echo (!empty($recordDetail->v_engineer_type) ? uperCaseWord($recordDetail->v_engineer_type) : null ) ?></td>
                <td><?php echo (!empty($recordDetail->v_sub_station_kv) ? getSubStationDetails($recordDetail->v_sub_station_kv) : null ) ?></td>
                <td class="text-center"><?php echo (!empty($recordDetail->v_city_name) ? $recordDetail->v_city_name : null ) ?></td>
                <td class="text-center"><?php echo (!empty($recordDetail->v_locality_name) ? $recordDetail->v_locality_name : null ) ?></td>
                <td class="text-center"><?php echo (!empty($recordDetail->v_pin_code) ? $recordDetail->v_pin_code : null ) ?></td>
                <td class="text-center status"><?php echo $status ?></td>
                <td class="actions-col">
                    <a title="<?php echo $this->lang->line("edit") ?>" href="<?php echo SUB_STATION_URL."showEditForm/".$encodeId ?>" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
                    <button title="<?php echo $status ?>"  data-record-id="<?php echo $encodeId ?>" onclick="updateStatus(this , 'sub_station')" class="btn btn-sm btn-warning mb-1"><i class="fa fa-eye-slash fa-fw iconStatus"></i></button>
                    <button title="<?php echo $this->lang->line('delete')?>" onclick="deleteRecord(this , 'sub_station' )" data-record-id="<?php echo $encodeId ?>" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
                </td>
                
                
                 
                
                
            </tr>
        	
        
        <?php 
        
    }
    
    
    if(!empty($pagination)){
        ?>
        	<input name="current_page" type="hidden" id="current_page" value="1">
            <input name="last_page" type="hidden" id="last_page" value="3">
            <input name="per_page" type="hidden" id="per_page" value="20">
        <?php 
    }
    
}else{
    ?>
    	<tr class="text-center">
    		<td colspan="8"> <?php echo $this->lang->line('no-record-found')?>  </td>
    	</tr>
    <?php 
}

echo $this->load->view( "common-record-count" , [] , true );

?>