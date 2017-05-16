/*
   This function handles the form validation
 */
function validate (id, className, messageElementId) {
    $('#submit').on('click', function(event) {
        if ($('.customer-form #' + id).val() == '') {
            $('.customer-form .' + className).addClass('has-danger');
            $('#'+messageElementId).show();
            event.preventDefault();
        }
    });

    function checkFieldvalue() {
        if ($(this).val() !== '') {
            $('.customer-form .' + className).removeClass('has-danger');
            $('#' + messageElementId).hide();
        }
    }

    $('.customer-form input#' + id).focus(checkFieldvalue).keyup(checkFieldvalue);
}

// Display organisation name field when selected
$(".customer-form input[name=customer]").on('change', function() {
    if ($(this).attr('id') == 'organisation') {
        $('.customer-form .oname').show();
        //Validate organisation name field only when visible
        validate('organisation_name', 'oname', 'o-message');
    }
    else{
        $('.customer-form .oname').hide();
    }
});

// Hides form input fields when anonymous is selected
$(".customer-form input[name=customer]").on('change', function() {
    if ($(this).attr('id') == 'anonymous') {
        $('.customer-form #input-fields').hide();
        // Push submit button to a new line
        $('.customer-form #submit').css('display', 'block');
    }
    else{
        $('.customer-form #input-fields').show();
        // Validate form fields only when visible
        validate('firstname', 'fname', 'f-message');
        validate('lastname', 'lname', 'l-message');
        // Set submit button display property to its initial value
        $('.customer-form #submit').css('display', 'inline-block');
    }
});


// Hides all form fields when service type is not selected
$(".customer-form #service_type").on('change', function() {
    if ($(this).val() !== 'none') {
        $('fieldset.form-info').show();
    }
    else{
        $('fieldset.form-info').hide();
    }
});