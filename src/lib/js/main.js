$(document).ready(function() {
    if ($('html').hasClass('drive-signup')) {
        //driverSignup();
        districts();
    }
});

function init() {
    formValidation();
}

function districts() {
    var districts = ['Colombo', 'Kandy', 'Galle', 'Ampara', 'Anuradhapura', 'Badulla', 'Batticaloa', 'Gampaha', 'Hambantota', 'Jaffna', 'Kalutara', 'Kegalle', 'Kilinochchi', 'Kurunegala', 'Mannar', 'Matale', 'Matara', 'Moneragala', 'Mullativu', 'Nuwara Eliya', 'Polonnaruwa', 'Puttalam', 'Ratnapura', 'Trincomalee', 'Vavuniya'];

    $.each(districts, function(e, i) {
        $('#district').append('<option value="' + i + '">' + i + '</option>');
    });
}

function formValidation() {
    if ($('.form-driver-signup').length > 0) {
        var $form = $('.form-driver-signup');
        var $submitButton = $('#button-submit');

        toggleSubmitButton($form, $submitButton);

        $form.on('blur input', function () {
            toggleSubmitButton($form, $submitButton);
        });
    }
}

function toggleSubmitButton($form, $submitButton) {
    if ($form.valid()) {
        $submitButton.removeAttr('disabled');
    } else {
        $submitButton.attr('disabled', 'disabled');
    }
}