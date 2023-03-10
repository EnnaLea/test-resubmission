$(document).ready(function () {

    // controlling dropdown menu and relatives input fields
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


    // input field implementation
    $("#product_form").validate({

        rules: {
            sku: {

                minlength: 3,
                number: true,

            },
            name: {

                minlength: 3,
                maxlenght: 20,
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

    // input field validation
    $('#no-refresh-form').click(function (e) {


        var sku = $("#sku").val();
        if (sku == '') {
            $('#message_error_sku').html('<p>Please, submit required SKU.</p>');
            $('#sku').focus();
            return false;
        }
        var name = $("#name").val();
        if (name == '') {
            $('#message_error_name').html('<p>Please, submit required Name.</p>');
            $('#name').focus();
            return false;
        }
        var price = $("#price").val();
        if (price == '') {
            $('#message_error_price').html('<p>Please, submit required Price.</p>');
            $('#price').focus();
            return false;
        }

        var type = $("#productType").val();
        if (type == 'Type Switcher') {
            $('#message_error_type').html('<p>Please, submit required Type.</p>');
            return false
        } else {
            $(this).find("option:selected").each(function () {
                var optionValue = $(this).attr("value");

                switch (optionValue) {
                    case "DVD":
                        var size = $("#size").val();
                        if (size == '') {
                            $('#message_error_size').html('<p>Please, submit required Size.</p>');
                            $('#size').focus();
                            return false;
                        }
                        break;

                    case "Furniture":
                        var height = $("#height").val();
                        if (height == '') {
                            $('#message_error_height').html('<p>Please, submit required Height.</p>');
                            $('#height').focus();
                            return false;
                        }
                        var width = $("#width").val();
                        if (width == '') {
                            $('#message_error_width').html('<p>Please, submit required Width.</p>');
                            $('#width').focus();
                            return false;
                        }
                        var lenght = $("#length").val();
                        if (lenght == '') {
                            $('#message_error_lenght').html('<p>Please, submit required Lenght.</p>');
                            $('#lenght').focus();
                            return false;
                        }

                        break;
                    case "Book":
                        var weight = $("#weight").val();
                        if (weight == '') {
                            $('#message_error_weight').html('<p>Please, submit required Weight.</p>');
                            $('#weight').focus();
                            return false;
                        }

                        break;
                    default:
                        break;
                }
            });
            e.preventDefault();
        }

    })



    // clear input field on cancel buuton
    $('.cancel').on('click', function () {

        location.reload(true);
    })


})


