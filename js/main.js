var formData = [];
function formValidation(fieldset) {
  $('.error_message').remove();
  var currentObj = fieldset.find('.require');
  var flag = true;
  $.each(currentObj, function(key, value) {
      if($(this).val() == '') {
        flag = false;
        $(this).parent('label').prepend('<div class="error_message"><p>This field is required.</div>');
      } else {

      }
  });
  return flag;
}
// Initialize Datepicker on both forms...
$('.date-picker').datepicker();

var btn = $('input.btn'); // generic button input
var btnStepOne = $('input.btn[data-id="step-1"]'); // button for step one
var btnStepTwo = $('input.btn[data-id="step-2"]'); // button for step two (both prev and next)

btn.prop('disabled', true); // make all button inputs disabled...
$('input.btn.previous').prop('disabled', false); // except the previous button ... those can be enabled at the start

$('#prdselection').on('change', function() { // show form for selected product. Hide fieldset for first step.
  var selected_product = $(this).val(); // product selected
  var kydex = $('form.kydex');
  var allen = $('form.allen');

  btnStepOne.prop('disabled', false); // enable next button

  btnStepOne.on('click', function() {
    if(selected_product === 'kydex') {
      $('div#step1').addClass('hide');
      btnStepTwo.prop('disabled', false);
      allen.addClass('hide');
      kydex.removeClass('hide');
    } else if(selected_product === 'allen') {
      $('div#step1').addClass('hide');
      kydex.addClass('hide');
      allen.removeClass('hide');
      btnStepTwo.prop('disabled', false);
    }
  });

});

// previous button

$('input.btn.previous[data-id="step-2"]').on('click', function() {
  $('.allen, .kydex').addClass('hide');
  $('form#colour_maching_form')[0].reset();
  $('div#step1').removeClass('hide');
});

/*****
*  Show extra fields in forms...
*****/
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
});

$('body').on('change', ".primary_light_source_selection,.primary_light_allen ", function() {
  var oValue = $(this).find("option:selected").val();
  if (oValue == "Other") {
      $(this).closest('.otheroption').find('.extra_input').show('slow');
  } else {
      $(this).closest('.otheroption').find('.extra_input').hide('slow');
  }
});

function saveData(productType) {
  var parent = $('input.btn.next[data-id="step-2"]').parent();
  var productType;
  var data = $('form.'+productType).serializeArray();
  formData.push(data);
  console.log(formData);
  //formData = hiddenForm.append("<fieldset class="+productType+'_'+num+">"+data+"</fieldset>");
}

$('input.btn.next[data-id="step-2"]').on('click', function() {
  var productType = $(this).attr('data-form');
  saveData(productType);
  $(this).parent().addClass('hide');
  $('div#step3').removeClass('hide');
});

$('div.addmore').on('click', function() {
  $('div#step3').addClass('hide');
  $('div#step1').removeClass('hide');
});

$('div.continue_to_submit').on('click', function() {
  $('div#step3').addClass('hide');
  $('div#step4').removeClass('hide');
})
