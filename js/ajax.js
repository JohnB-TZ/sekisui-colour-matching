$(document).ready(function(){
		 $('body').on('change',".product_selection_series ", function(){
    	console.log('1');
        var product_selection_series  = $(".product_selection_series  option:selected").val();
        console.log(product_selection_series);
        $.ajax({
            type: "POST",
            url: "process-request-product-series.php",
            data: { productseries : product_selection_series  }
        }).done(function(data){
            $("#dynamic_product_binded").html(data);
        });
    });
});
