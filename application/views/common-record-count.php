<script>

<?php 

if(isset($totalRecord)){
    if(!empty($totalRecord)){
        
        ?>
        $("#total-record-count").html("<?php echo $totalRecord ?>")
        
        <?php 
    }else{
        ?>
        $("#total-record-count").html(0)
        <?php 
    }
    
}

?>

</script>

