$(document).ready(function () {

    $.validator.addClassRules("required", {
        required: true
    });

    $.validator.messages.required = "обязательное поле!";

    $("form").validate(
        {
            errorPlacement: function(error, element) {
                error.insertBefore(element);
            }
        }
    );
});
