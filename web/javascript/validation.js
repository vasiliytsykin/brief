$(document).ready(function () {

    $.validator.addClassRules("required", {
        required: true
    });

    $.validator.messages.required = "обязательное поле!";
    $.validator.messages.email = "укажите корректный email"

    $("form").validate(
        {
            errorPlacement: function(error, element) {
                error.insertBefore(element);
            }
        }
    );
});
