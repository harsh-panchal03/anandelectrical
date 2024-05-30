

<table border="1" width="700" height="800" style="border-collapse: collapse;">
    <tbody>
        <tr>
            <td colspan="5">
                <p>Date<strong>:-</strong>13/05/2023</p>
            </td>
        </tr>
        <tr >
            <td colspan="5" style=" pedding-buttom : 50%">
                <pre >
                         To,
                            <?php echo  str_replace("_", " ",$inquiryDetils->engineer . "(TR)") ."\n"; ?>
                            
                            <?php echo  $inquiryDetils->v_sub_station_kv." KV SUBSTATION" ?>  
                            GUJARAT ENERGY TRANSMISSION CORPORATION LTD
                            <?php echo $inquiryDetils->v_locality_name . "\n";  ?>
                </pre>
            </td>
        </tr>
        <tr style="text-align: center;" >
            <td width="43" style="text-align: center;">
                <p>No</p>
            </td>
            <td width="435" style="text-align: center;">
                <p>DESCRIPTION</p>
            </td>
            <td width="38" style="text-align: center;">
                <p>NO</p>
            </td>
            <td width="85" style="text-align: center;">
                <p>RUPEES</p>
            </td>
            <td width="75" style="text-align: center;">
                <p>PER </p>
            </td>
        </tr>
        
        <?php 
        
            if(!empty($descriptionDetails)){
              
                foreach ($descriptionDetails as $index => $description){
                    
                    $index = $index + 1;
                    
                    if($index < 10){
                        $index = "0".$index;
                    }
                
                    ?>
                    
                    <tr style="text-align: center;">
                        <td width="43" style="text-align: center;">
                            <p><?php echo $index ?></p>
                        </td>
                        <td width="435" style="text-align: left;">
                            <p><?php echo (!empty($description->v_description_details) ? $description->v_description_details : "")?>&nbsp;</p>
                        </td>
                        <td width="38" style="text-align: center;">
                            <p>1</p>
                        </td>
                        <td width="85" style="text-align: center;">
                            <p><?php echo (!empty($description->v_unnati_rate) ? $description->v_unnati_rate : "" )?></p>
                        </td>
                        <td width="75" style="text-align: center;">
                            <p><?php echo (!empty($description->v_unit) ? $description->v_unit : "")?></p>
                        </td>
                    </tr>
                    <?php 
                    }
            }
        
        ?>
         <tr>
            <td colspan="5" width="676" height="300" style="vertical-align: top; text-align: right; pedding-buttom : 50%">
                <pre style="font-size: 16px;"> + 18 % GST </pre>
        	</td>
        </tr>
        
         <tr>
            <td colspan="5" width="676"  style="vertical-align: top; text-align: right; pedding-buttom : 50%">
          		 <img src="<?php echo IMAGES_FOLDER. "new-a.png"?>" height="100" width="300"/>
        	</td>
        </tr>

    </tbody>
</table>
 


