$(document).ready(
    function()
    {
        // alert("ready!");
        get_product_selectlist();

        $("#productSelect")
        .change(function() {
            $("#result").html("<img src='images/loading.gif'> loading...");
            productId = $("#productId option:selected").val();
            calc_total_sales(productId);
        });

    }// end inner function

 );// end ready function

