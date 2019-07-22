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

                        $('.form-group .date-picker').removeClass('hasDatepicker').datepicker();
                        form_count_form = $(this).parent();
                        if (validation_check(form_count_form)) {
                            next_form = $(this).parent().next();
                            next_form.show();
                            form_count_form.hide();
                            setProgressBar(++form_count);
                        } else {
                        $('html, body').animate({
                          scrollTop: ($('.error_message').first().offset().top - 100)
                        }, 2000);
                    }
  });

$('.custom_page_form').on('click' ,'.previous', function () {

 //$('.form-group .date-picker').datepicker();
    form_count_form = $(this).parent();
    next_form = $(this).parent().prev();
    next_form.show();
    form_count_form.hide();
    setProgressBar(--form_count);
  });
  setProgressBar(form_count);
  function setProgressBar(curStep){
    var percent = parseFloat(100 / total_forms) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");
  }
});
