$(document).ready(function () {


    $(".productType").change(function () {
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

    // alert('hello');


    $("#product_form").validate({

        rules: {
            sku: {
                // required: true,
                minlength: 3,
                number: true,

            },
            name: {
                // required: true,
                minlength: 3,
                maxlenght: 20,
            },
            price: {
                // required: true,
                minlength: 3,
            },
            weight: {
                // required: true,
                number: true,
                min: 1,

            },
            size: {
                // required: true,
                number: true,
                min: 100,

            },
            width: {
                // required: true,
                number: true,
                min: 10,

            },
            lenght: {
                // required: true,
                number: true,
                min: 30,

            },
            height: {
                // required: true,S
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

