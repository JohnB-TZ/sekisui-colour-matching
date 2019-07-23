function validation_check(parentObject) {
    jQuery(".error_message").remove();
    var currentObj = parentObject.find('.require');
    var flag = true;
    $.each(currentObj, function(key, value) {
        if ($(this).val() == "") {
            flag = false;
            $(this).parent("label").prepend("<div class='error_message'><p>This field is required.</div>");
            //return false;
        }
    });
    return flag;
}

$(document).ready(function() {
  $("select.prdselection option:first-child").attr("disabled", "true");
            var form_count = 1,
                form_count_form, next_form, total_forms;
            total_forms = $("fieldset").length;
            $('.custom_page_form').on('click', '.next', function() {
                        //jQuery('fieldset').hide();
                        $('.static_addess_field ').hide();
                        $('.form-group .date-picker').removeClass('hasDatepicker').datepicker();
                            form_count_form = $(this).parents('fieldset');                       
                            next_form = $(this).parents('fieldset').next();
                            next_form.show();
                            form_count_form.hide();
                            //setProgressBar(++form_count);
                            console.log('t1');
                       
                    });



            $('.custom_page_form').on('click' ,'.previous', function () {
            $('.static_addess_field ').hide();
             //$('.form-group .date-picker').datepicker();
                form_count_form = $(this).parents('fieldset');
                prev_form = $(this).parents('fieldset').prev();
                prev_form.show();
                form_count_form.hide();
                //setProgressBar(--form_count);
                console.log('t2');
              });

  });







