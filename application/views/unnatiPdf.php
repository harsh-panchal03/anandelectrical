
 <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;'>DATE:- <?php echo ( ( isset($inquiryDetils) && !empty($inquiryDetils->dt_unnati_inquiry_date) ) ? date("d/m/Y" , strtotime($inquiryDetils->dt_unnati_inquiry_date)) : "12/12/asd0")?></p>
	<div style="text-align: center; font-family: 'Calibri', sans-serif; color: black;">
    	<p style="margin: 0; text-align: left; padding-left: 175px; margin-bottom: 5px;">M/S,</p>
    	<p style="margin: 0; text-align: left; padding-left: 200px; margin-bottom: 5px;"><?php echo  str_replace("_", " ",$inquiryDetils->engineer . "(TR)")  ?></p>
        <p style="margin: 0; text-align: left; padding-left: 200px; margin-bottom: 5Px;"><?php echo $inquiryDetils->v_sub_station_kv?> KV SUBSTATION</p>
        <p style="margin: 0; text-align: left; padding-left: 200px; margin-bottom: 5Px;">GUJARAT ENERGY TRANSMISSION CORPORATION LTD</p>
        <p style="margin: 0; text-align: left; padding-left: 200px; margin-bottom: 5Px;"><?php echo $inquiryDetils->v_locality_name ?></p>
</div>

   <div style="display: flex; justify-content: center;">
      <table style="border: none;width:484.4pt;margin-left:auto;margin-right:auto;border-collapse:collapse;">
   		<tbody>
            <tr>
                <td style="width: 33.25pt;border: 1pt solid black;padding: 2.2pt 0cm 0cm 5.4pt;height: 16.8pt;vertical-align: top;"><strong>SR no</strong></td>
                <td style="width: 313.6pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 2.2pt 0cm 0cm 5.4pt;height: 16.8pt;vertical-align: top;">
                    <p style="margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:'Calibri',sans-serif;color:black;text-align:center;line-height:normal;"><strong><u>DESCRIPTION OF GOODS</u></strong></p>
                </td>
                <td style="width: 32.45pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 2.2pt 0cm 0cm 5.4pt;height: 16.8pt;vertical-align: top;">
                    <p style="margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:.05pt;font-size:11.0pt;font-family:'Calibri',sans-serif;color:black;line-height:normal;"><strong><u>QTY.</u></strong></p>
                </td>
                <td style="width: 49.7pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 2.2pt 0cm 0cm 5.4pt;height: 16.8pt;vertical-align: top;">
                    <p style="margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:'Calibri',sans-serif;color:black;line-height:normal;"><strong><u>RUPEE</u></strong></p>
                </td>
                <td style="width: 55.45pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 2.2pt 0cm 0cm 5.4pt;height: 16.8pt;vertical-align: top;">
                    <p style="margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:'Calibri',sans-serif;color:black;line-height:normal;"><strong><u>UNIT</u></strong></p>
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
                    <tr>
                   		 <td style="width: 33.25pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 2.2pt 0cm 0cm 5.4pt;height: 30.85pt;vertical-align: top;">
                    		<p style="margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:'Calibri',sans-serif;color:black;line-height:normal;"><span style="font-size:16px;">(<?php echo $index  ?>.)&nbsp;</span></p>
                    	</td>
                    	<td style="width: 313.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 2.2pt 0cm 0cm 5.4pt;height: 30.85pt;vertical-align: top;">
                    		<p style="margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:'Calibri',sans-serif;color:black;line-height:normal;"><span style="font-size:16px;"><?php echo (!empty($description->v_description_details) ? $description->v_description_details : "")?>&nbsp;</span></p>
                    	</td>
                  	    <td style="width: 32.45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 2.2pt 0cm 0cm 5.4pt;height: 30.85pt;vertical-align: top;">
                   			 <p style="margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:1.45pt;font-size:11.0pt;font-family:'Calibri',sans-serif;color:black;line-height:normal;"><span style="font-size:16px;">1&nbsp;</span></p>
                   	    </td>
                    	<td style="width: 49.7pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 2.2pt 0cm 0cm 5.4pt;height: 30.85pt;vertical-align: top;">
                    		<p style="margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:'Calibri',sans-serif;color:black;line-height:normal;"><span style="font-size:16px;"><?php echo (!empty($description->v_unnati_rate) ? $description->v_unnati_rate : "" )?></span></p>
                   		</td>
                    	<td style="width: 55.45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 2.2pt 0cm 0cm 5.4pt;height: 30.85pt;vertical-align: top;">
                   			 <p style="margin-top:0cm;margin-right:24.05pt;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:'Calibri',sans-serif;color:black;text-align:right;line-height:normal;"><span style="font-size:16px;"><?php echo (!empty($description->v_unit) ? $description->v_unit : "")?></span></p>
                    	</td>
                    </tr>
                   <?php  
                    
                    
                }
                
            }
            ?>
            </tbody>
    </table>
</div>
 <p style="margin: 0; text-align: left; padding-left: 420px; margin-bottom: 10px; font-size:16px;font-family:'Calibri',sans-serif;color:black;">+ 18% GST WILL BE APPLICABLE . </p>




<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.1pt;margin-left:-.25pt;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;text-indent:-.5pt;'><strong><span style="font-size:16px;">FOR, &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; FROM,&nbsp;</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:12.4pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;'><strong><em><span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; R.B.PANCHAL&nbsp;</span></em></strong></p>
<div style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;color:black;'>
    <h1 style='margin-top:0cm;margin-right:0cm;margin-bottom:8.1pt;margin-left:.5pt;text-indent:-.5pt;font-size:16px;font-family:"Calibri",sans-serif;color:black;'><span style="line-height:107%;font-size:19px;"><?php echo $inquiryDetils->v_sub_station_kv ?> KV <?php echo $inquiryDetils->v_locality_name ?> &nbsp; SS &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><em><span style="font-size:18.0pt;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></em><span style="font-size:14.0pt;line-height:107%;">UNNATI CORPORATON</span><span style="line-height:107%;">&nbsp;</span></h1>
</div>