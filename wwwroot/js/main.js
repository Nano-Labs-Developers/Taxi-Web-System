$(document).ready(function() {
    if ($('html').hasClass('drive-signup')) {
        //driverSignup();
        districts();
    }

    if ($('html').hasClass('client-dash')) {
        clientsidebar('dashboard');
    } else if ($('html').hasClass('client-order')) {
        clientsidebar('orders');
    } else if ($('html').hasClass('client-review')) {
        clientsidebar('review');
    } else {

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

        $form.on('blur input', function() {
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

function clientsidebar($page) {
    if ($page == "dashboard") {
        var dash = document.getElementById("c-dash");
        var order = document.getElementById("c-order");
        var review = document.getElementById("c-review");

        dash.classList.add("active");
        order.classList.remove("active");
        review.classList.remove("active");
    } else if ($page == "orders") {
        var dash = document.getElementById("c-dash");
        var order = document.getElementById("c-order");
        var review = document.getElementById("c-review");

        dash.classList.remove("active");
        order.classList.add("active");
        review.classList.remove("active");
    } else if ($page == "review") {
        var dash = document.getElementById("c-dash");
        var order = document.getElementById("c-order");
        var review = document.getElementById("c-review");

        order.classList.remove("active");
        dash.classList.remove("active");
        review.classList.add("active");
    }
}