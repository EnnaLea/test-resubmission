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

    // alert('hello');

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
            $('#message_error_sku').html('<p>Please, submit required data.</p>');
            $('#sku').focus();
            return false;
        }
        var name = $("#name").val();
        if (name == '') {
            $('#message_error_name').html('<p>Please, submit required data.</p>');
            $('#name').focus();
            return false;
        }
        var price = $("#price").val();
        if (price == '') {
            $('#message_error_price').html('<p>Please, submit required data.</p>');
            $('#price').focus();
            return false;
        }

        var type = $("#productType").val();
        if (type == 'Type Switcher') {
            $('#message_error_type').html('<p>Please, submit required data.</p>');
            return false
        } else {
            $(this).find("option:selected").each(function () {
                var optionValue = $(this).attr("value");

                switch (optionValue) {
                    case "DVD":
                        var size = $("#size").val();
                        if (size == '') {
                            $('#message_error_size').html('<p>Please, submit required data.</p>');
                            $('#size').focus();
                            return false;
                        }
                        break;

                    case "Furniture":
                        var height = $("#height").val();
                        if (height == '') {
                            $('#message_error_height').html('<p>Please, submit required data.</p>');
                            $('#height').focus();
                            return false;
                        }
                        var width = $("#width").val();
                        if (width == '') {
                            $('#message_error_width').html('<p>Please, submit required data.p>');
                            $('#width').focus();
                            return false;
                        }
                        var lenght = $("#lenght").val();
                        if (lenght == '') {
                            $('#message_error_lenght').html('<p>Please, submit required data.</p>');
                            $('#lenght').focus();
                            return false;
                        }

                        break;
                    case "Book":
                        var weight = $("#weight").val();
                        if (weight == '') {
                            $('#message_error_weight').html('<p>Please, submit required data.</p>');
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

        // $("#productType").on('click', function () {


        // });

        // $('#message_error').html('<p>Please, submit required Type.</p>');


        // $.ajax({
        // type: 'POST',
        // url: 'classes/typecontroller.class.php',
        // data: dataString,
        // beforeSend: function () {
        //     $('#message_error').html()
        // },
        // success: function (data) {
        //     setTimeout(function () {
        //         $('#message_error').html(data);
        //     });
        // }

        // });
    })



    // clear input field on cancel buuton
    $('.cancel').on('click', function () {

        location.reload(true);
    })






































    // $(function () {
    //     function sendData($form) {
    //         let dataString = $form.serialize();

    //         return $ajax({
    //             type: $form.attr('method'),
    //             url: $form.attr('action'),
    //             data:
    //                 dataString,

    //         })

    //     }


    // function SubmitFormData() {
    //     var sku = $("#sku").val();
    //     var name = $("#name").val();
    //     var price = $("#price").val();
    //     var size = $("#size").val();
    //     var weight = $("#weight").val();
    //     var width = $("#width").val();
    //     var lenght = $("#lenght").val();
    //     var height = $("#height").val();
    //     var type = $("input[type=select]:selected").val();
    //     $.post("bin/process.php", { sku: sku, name: name, price: price, size: size, weight: weight, width: width, lenght: lenght, height: height, type: type },
    //         function (data) {
    //             $('#results').html(data);
    //             $('#product_form')[0].reset();
    //         });
    // }



    // $('form').validate();

    // $('form').on('submit', function (e) {

    //     e.preventDefault();

    //     let dataString = $(this).serialize();

    //     sendData($(this)).done(function () {

    // error: function() {
    //     $('#no-refresh-form').html('<div id="message"></div>')


    // }

    //     $('#message')
    //         .html('<p>Please Submit Required Data.</p>')
    //         .hide()
    //         .fadeIn(1500);

    // });

    // $.ajax({
    //     type: 'POST',
    //     url: 'bin/process.php',
    //     data: dataString,
    //     success: function () {
    //         $('#no-refresh-form').html('<div id="message"></div>')

    //         $('#message')
    //             .html('<p>>Contact Form Submtted!</p>')
    //             .append('<p></p>')
    //             .hide()
    //             .fadeIn(1500);

    // }
    // });

    // });


})


