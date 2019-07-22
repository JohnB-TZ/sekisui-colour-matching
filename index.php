 <html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Custom Page</title>
       	 <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="/favicon.ico" />
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
 		<style type="text/css">
              @font-face{
		        font-family:"HelveticaNeueW02-45Ligh";
		        src:url("/Fonts/694015/88fcd49a-13c7-4d0c-86b1-ad1e258bd75d.eot?#iefix");
		        src:url("/Fonts/694015/88fcd49a-13c7-4d0c-86b1-ad1e258bd75d.eot?#iefix") format("eot"),url("/Fonts/694015/7732d6de-bd05-4c17-ae43-99e9a02edf31.woff2") format("woff2"),url("/Fonts/694015/9a2e4855-380f-477f-950e-d98e8db54eac.woff") format("woff"),url("/Fonts/694015/fa82d0ee-4fbd-4cc9-bf9f-226ad1fcbae2.ttf") format("truetype"),url("/Fonts/694015/48d599a6-92b5-4d43-a4ac-8959f6971853.svg#48d599a6-92b5-4d43-a4ac-8959f6971853") format("svg");
		        }
		        @font-face{
		        font-family:"HelveticaNeueW02-55Roma";
		        src:url("/Fonts/694021/0b3a3fca-0fad-402b-bd38-fdcbad1ef776.eot?#iefix");
		        src:url("/Fonts/694021/0b3a3fca-0fad-402b-bd38-fdcbad1ef776.eot?#iefix") format("eot"),url("/Fonts/694021/b4cd926c-1a31-4785-b261-1db1a68c521e.woff2") format("woff2"),url("/Fonts/694021/d5af76d8-a90b-4527-b3a3-182207cc3250.woff") format("woff"),url("Fonts/694021/1d238354-d156-4dde-89ea-4770ef04b9f9.ttf") format("truetype"),url("/Fonts/694021/b68875cb-14a9-472e-8177-0247605124d7.svg#b68875cb-14a9-472e-8177-0247605124d7") format("svg");
		        }
		        @font-face{
		        font-family:"HelveticaNeueW02-65Medi";
		        src:url("/Fonts/694027/55f60419-09c3-42bd-b81f-1983ff093852.eot?#iefix");
		        src:url("/Fonts/694027/55f60419-09c3-42bd-b81f-1983ff093852.eot?#iefix") format("eot"),url("/Fonts/694027/9f93e286-eeaa-4077-b0b2-0e6901920f74.woff2") format("woff2"),url("/Fonts/694027/5b4a262e-3342-44e2-8ad7-719998a68134.woff") format("woff"),url("/Fonts/694027/4a3ef5d8-cfd9-4b96-bd67-90215512f1e5.ttf") format("truetype"),url("/Fonts/694027/58ab5075-53ea-46e6-9783-cbb335665f88.svg#58ab5075-53ea-46e6-9783-cbb335665f88") format("svg");
		        }
		</style>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/step.js"></script>

		<link rel="stylesheet" href="style.css">
		<!-- jquery datepicker -->
		<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"rel = "stylesheet">
		<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
		<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	</head>

	<?php include 'header.php';?>
<body>
<div class="custom_page_body pullup-high">
	<div class="wrap">
		<div class="custom_page_form">
<!-- 			<div class="progress">
			<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
			</div> -->
			<div class="alert alert-success hide"></div>
			<form id="colour_maching_form"  action="email.php"  method="post">
			  <?php include 'step1.php';?>
           <fieldset class="commonfieldgroup" id="con_value"></fieldset>
			  <?php include 'step3.php';?>
			  <?php include 'step4.php';?>
			</form>
			   <?php include 'kydex.php';?>
			   <?php include 'allen.php';?>
		</div>

    <input type="hidden" name="multiple" id="multiple_select" value=""/>


	</div>
</div>
<div class="email_preview" id="email_preview" >

</div>
<div class="response_loading" id="response">
	<div class="innerdiv"><img src="images/loading.gif" class="img-responsive"></div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#prdselection').change(function() {
        var checkSelect = parseInt($("#multiple_select").val());
        var SelectedValue = $(this).find("option:selected").val();
        if (SelectedValue == 'kydex') {
            var kydex = jQuery(".kydex").html()

            if (checkSelect == 1) {
                $("#con_value").before('<fieldset class="commonfieldgroup" id="mul_con_value"></fieldset>');

                $("#mul_con_value").html(kydex);

            } else
                $("#con_value").html(kydex);

            $(this).closest('.form-group').next('.btn').prop("disabled", false);
        }
        if (SelectedValue == 'allen') {
            var allen = jQuery(".allen").html();
            if (checkSelect == 1) {
                $("#con_value").before('<fieldset class="commonfieldgroup" id="mul_con_value"></fieldset>');

                $("#mul_con_value").html(allen);
                $('#mul_con_value').addClass('test');

            } else
                $("#con_value").html(allen);

            $(this).closest('.form-group').next('.btn').prop("disabled", false);
        }
    });

    /**********movment from confirmation step  Start **********/
    $('.continue').click(function(e) {
        e.preventDefault();
        current_fs = $('#step3');
        next_fs = $('#step4');
        next_fs.show();
        current_fs.hide();
    });

    //$('.addmore').click(function(event) {
    $('body').on('click', '.addmore', function(event) {    	
        event.preventDefault();
        current_fs = $('#step3');
        prev_fs = $('#step1');
        prev_fs.show();
        if (parseInt($("#multiple_select").val()) == 1)
            $("#multiple_select").val(0);
        else
            $("#multiple_select").val(1);
        current_fs.hide();
        $(this).closest('form').trigger("reset");
        $('.static_addess_field ').hide();
    });

    $('.lastprev').click(function(event) {
        event.preventDefault();
        current_fs = $('#step4');
        prev_fs = $('#step3');
        prev_fs.show();
        current_fs.hide();
        $('.btngroup_nav').show();;
    });
    /**********movment from confirmation step End  **********/

    /* Add More fields start */
    $('body').on('change', '.ul_required', function() {

        var SValue = $(this).find("option:selected").val();
        if (SValue == 'Yes') {
            $(this).closest('.checkrequired').find('.ul_type_next').show('slow');

        } else {
            $(this).closest('.checkrequired').find('.ul_type_next').hide('slow');
        }
    });

    $('body').on('change', '.physical_sample', function() {
      var SValue = $(this).find("option:selected").val();
      if(SValue == 'Yes') {
        $(this).closest('.checkrequired').find('.ul_type_next').show('slow');
        $('.static_addess_field').show('slow');
      } else {
        $(this).closest('.checkrequired').find('.ul_type_next').hide('slow');
        $('.static_addess_field').hide('slow');
      }
    })
    /* Add More fields End */

    /* For other option field*/
    $('body').on('change', ".primary_light_source_selection,.primary_light_allen ", function() {
        var oValue = $(this).find("option:selected").val();
        if (oValue == "Other") {
            $(this).closest('.otheroption').find('.extra_input').show('slow');
             $(this).closest('.otheroption').find('.extra_input').find('input').addClass('require');

        } else {
            $(this).closest('.otheroption').find('.extra_input').hide('slow');
            $(this).closest('.otheroption').find('.extra_input').find('input').removeClass('require');
        }
    });
});
</script>

<script type="text/javascript">
$(document).ready(function() {
    //$('#colour_maching_form').submit(function(e) {
 	$("input.btn-success").click(function(e){

        var form=$('#colour_maching_form');
        e.preventDefault();
           form_count_form = $(this).parents('.commonfieldgroup');
           if(validation_check(form_count_form))
                     {
	        $.ajax({
	            type: "POST",
	            url: 'email.php',
	            data: form.serialize(),
	            beforeSend : function() {
		        //this will run before sending an ajax request do what ever activity
		      		jQuery('#email_preview').hide();
		            jQuery(".response_loading").show('fast');

		         },
	            success: function(data)
	            {
	            	//jQuery('.custom_page_body').hide('slow')
		            jQuery(".response_loading").hide();
					jQuery('#email_preview').show();
	                //var jsonData = JSON.parse(data);
	 				jQuery('#email_preview').html('<p>Form submitted successfully.</p>');

	 				  window.setTimeout(function () {
	 						window.location.href= "thank-you.php";
	      				}, 400);

	           },
		        error: function (xhr, desc, err)
		        {
		            console.log("error");

		        }
	       });
	     }

     });
});
</script>
<script type="text/javascript">
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
</script>
<?php include 'footer.php'?>
</body>
</html>
