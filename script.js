$(document).ready(function () {


    $("#productType").change(function () {
        $(this).find("option:selected").each(function () {
            var optionValue = $(this).attr("value");

            switch (optionValue) {
                case "DVD":
                    $(".select-option-dvd").show();
                    $(".select-option-furniture").hide();
                    $(".select-option-book").hide();
                    break;
                case "Furniture":
                    $(".select-option-furniture").show();
                    $(".select-option-dvd").hide();
                    $(".select-option-book").hide();
                    break;
                case "Book":
                    $(".select-option-book").show();
                    $(".select-option-furniture").hide();
                    $(".select-option-dvd").hide();
                    break;
                default:
                    break;
            }
        });
    }).change();


    $('#chk_all').click(function () {
        if (this.checked)
            $(".delete-checkbox").prop("checked", true);
        else
            $(".delete-checkbox").prop("checked", false);
    });


    // alert("hello");



    // jQuery.validator.addMethod("letters", function (value, element) {
    //     return this.optional(element) || /[a-zA-Z ]/.test(value);
    // }, "Please, enter letters only.");


    // jQuery.validator.addMethod('letters', function (value, element) {
    //     if (/^[a-zA-Z]+$/.test(value)) {
    //         return true;
    //     } else {
    //         return false;
    //     };
    // });



    $("#product_form").validate({

        rules: {
            sku: {
                minlength: 3,
                number: true,

            },
            name: {

                minlength: 3,
                maxlenght: 20,
                letters: true //why it doesn't work???
            },
            price: {
                minlength: 3,
            },
            weight: {

                number: true,
                min: 1,

            },
            size: {

                number: true,
                min: 100,

            },
            width: {

                number: true,
                min: 10,

            },
            lenght: {

                number: true,
                min: 30,

            },
            height: {

                number: true,
                min: 40,

            },

        },

        invalidHandler: function (event, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = errors == 1
                    ? 'You missed 1 field. It has been highlighted'
                    : 'You missed ' + errors + ' fields. They have been highlighted';
                $("div.error span").html(message);
                $("div.error").show();
            } else {
                $("div.error").hide();
            }
        }
    });


});










