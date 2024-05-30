<script>


$(window).scroll(function() {
// console.log("data");
//get last page value
let lastPage = $('#last_page').val();
//current page value
let CurrentPage = $('#current_page').val();

//inc current page value
CurrentPage = parseInt(CurrentPage) + 1 ;

var scrollTop = $(window).scrollTop();

//scrollTop = parseFloat(scrollTop).toFixed(0);

scrollTop = ( parseFloat(scrollTop) + parseInt(1) );

if((parseFloat(scrollTop) + $(window).height()) >= $(document).height()) {
    
    if(lastPage >= CurrentPage ){
        
        var searchData = searchFiled();
        searchData.page = CurrentPage;

        var check_ajax_response = true;
        check_ajax_response = searchAjax(paginationUrl, searchData, true);
        //update current page value
        if( check_ajax_response != false ){
            $('#current_page').val(CurrentPage);
        }
    }
}
});


</script>