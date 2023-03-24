$(document).ready(function () {

    // alert("funziona!");

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
                number: true,
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
            return false;
        }
        else {
            $('#message_error_sku').hide();
        }
        var name = $("#name").val();
        if (name == '') {
            $('#message_error_name').html('<p>Please, submit required data.</p>');
            return false;
        } else {
            $('#message_error_name').hide();
        }
        var price = $("#price").val();
        if (price == '') {
            $('#message_error_price').html('<p>Please, submit required data.</p>');
            return false;
        } else {
            $('#message_error_price').hide();
        }

        var type = $("#productType").val();
        if (type == 'Type Switcher') {
            $('#message_error_type').html('<p>Please, submit required data.</p>');
            return false
        } else {

            $('#message_error_type').hide();

            $(this).find("option:selected").each(function () {
                var optionValue = $(this).attr("value");

                switch (optionValue) {
                    case "DVD":
                        var size = $("#size").val();
                        if (size == '') {
                            $('#message_error_size').html('<p>Please, submit required data.</p>');
                            return false;
                        } else {
                            $('#message_error_size').hide();
                        }
                        break;

                    case "Furniture":
                        var height = $("#height").val();
                        if (height == '') {
                            $('#message_error_height').html('<p>Please, submit required data.</p>');
                            return false;
                        } else {
                            $('#message_error_height').hide();
                        }
                        var width = $("#width").val();
                        if (width == '') {
                            $('#message_error_width').html('<p>Please, submit required data.</p>');
                            return false;
                        } else {
                            $('#message_error_width').hide();
                        }
                        var lenght = $("#length").val();
                        if (lenght == '') {
                            $('#message_error_lenght').html('<p>Please, submit required data.</p>');
                            return false;
                        } else {
                            $('#message_error_lenght').hide();
                        }

                        break;
                    case "Book":
                        var weight = $("#weight").val();
                        if (weight == '') {
                            $('#message_error_weight').html('<p>Please, submit required data.</p>');
                            return false;
                        } else {
                            $('#message_error_weight').hide();
                        }

                        break;
                    default:
                        break;
                }
            });

        }
        e.preventDefault();

    })


    // duplicate sku error messages
    // $('#sku').click(function (e) {

    //     let skuId = $(this).attr("value");
    //     var sku = $("#sku").val();
    //     // let skuId = $("#sku-value").val();
    //     if (sku == skuId) {
    //         $('#sku-duplicate').html('<p>This SKU already exist. Click  HERE  to change</p>');
    //         return false;
    //     }
    //     console.log(skuId);
    //     console.log(sku);


    //     e.preventDefault();
    // })

    // $("#sku-duplicate").click(function () {

    //     location.reload(true);

    //     e.preventDefault();
    // })


    // fetch dvd
    fetch("dvd.json")
        .then(function (response) {
            return response.json();
        })
        .then(function (products) {
            let outDvd = "";

            // let skuIdDvd = array();

            for (let product of products) {
                outDvd += `

    <div class='col' id='display'>
      <div class='col' id='info'>

        <div class='card' style='margin: 0; padding-top: 0.5rem; padding-bottom:0.5rem; dispaly: flex;'>
          <div class='card-body info' style='dispaly: flex; margin: 0; padding: 0;'>
            <input id='chk_all' type='checkbox' class='delete-checkbox' name='delete-checkbox[]' value='${product.id}'>
            <div class='items text-center' style='justify-content:center; align-items: center; margin: 0; padding: 0;'>

              <table style='justify-content:center; align-items: center; margin: 0; padding: 0;'>
                <tbody>
                  <tr class='row' style='font-weight: bold; font-size: 1.2rem;'>
                    <td > ${product.sku} </td>
                    <td> ${product.name}</td>
                    <td> ${product.price} $</td>
                    <td>${product.size} MB</td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>

    </div>
                `;

            }

            $("#product-card").append(function () {
                return outDvd;

            });

        })



    // fetch furniture
    fetch("furniture.json")
        .then(function (response) {
            return response.json();
        })
        .then(function (products) {
            let outFurniture = "";
            for (let product of products) {
                outFurniture += `

        <div class='col' id='display'>
          <div class='col' id='info'>

            <div class='card' style='margin: 0; padding-top: 0.5rem; padding-bottom:0.5rem; dispaly: flex;'>
              <div class='card-body info' style='dispaly: flex; margin: 0; padding: 0;'>
                <input id='chk_all' type='checkbox' class='delete-checkbox' name='delete-checkbox[]' value='${product.id}'>
                <div class='items text-center' style='justify-content:center; align-items: center; margin: 0; padding: 0;'>

                  <table style='justify-content:center; align-items: center; margin: 0; padding: 0;'>
                    <tbody>
                      <tr class='row' style='font-weight: bold; font-size: 1.2rem;'>
                        <td> ${product.sku} </td>
                        <td> ${product.name}</td>
                        <td> ${product.price} $</td>
                        <td>Dimension: ${product.length}x${product.width}x${product.height}</td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>

        </div>
                    `;
            }

            $("#product-card").append(function () {
                return outFurniture;
            });

        })



    // fetch book
    fetch("book.json")
        .then(function (response) {
            return response.json();
        })
        .then(function (products) {
            var outBook = "";
            for (let product of products) {
                outBook += `

        <div class='col' id='display'>
          <div class='col' id='info'>

            <div class='card' style='margin: 0; padding-top: 0.5rem; padding-bottom:0.5rem; dispaly: flex;'>
              <div class='card-body info' style='dispaly: flex; margin: 0; padding: 0;'>
                <input id='chk_all' type='checkbox' class='delete-checkbox' name='delete-checkbox[]' value='${product.id}'>
                <div class='items text-center' style='justify-content:center; align-items: center; margin: 0; padding: 0;'>

                  <table style='justify-content:center; align-items: center; margin: 0; padding: 0;'>
                    <tbody>
                      <tr class='row' style='font-weight: bold; font-size: 1.2rem;'>
                        <td> ${product.sku} </td>
                        <td> ${product.name}</td>
                        <td> ${product.price} $</td>
                        <td>Weight: ${product.weight} KG</td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>

        </div>
                       `;
            }

            $("#product-card").append(function () {
                return outBook;
            });
        })


})//end










    // clear input field on cancel button
    // $('.cancel').on('click', function () {

    //     location.reload(true);
    // })




    // $("#cards").div(outBook, outFurniture, outDvd);


    // $("#target").submit(function (event) {
    //     alert("Handler for .submit() called.");
    //     event.preventDefault();
    // });

    // $("#other").click(function () {
    //     $("#target").submit();
    // });




 // fetch data form json file
    // fetch("data.json")
    //     .then(function (response) {
    //         return response.json();
    //     })
    //     .then(function (products) {
    //         let placeholder = document.querySelector("#data-output");
    //         let out = "";
    //         for (let product of products) {
    //             out += `
    //             <tr>

    //             <td>${product.sku}</td>
    //             <td>${product.name}</td>
    //             <td>${product.price} $ </td>
    //             <td>${product.type}</td>
    //             <td>${product.weight}</td>
    //             <td>${product.size}</td>
    //             <td>${product.length}</td>
    //             <td>${product.width}</td>
    //             <td>${product.height}</td>



    //             </tr>

    //              `;
    //         }

    //         placeholder.innerHTML = out;
    //     })


 // create div on click save button
    // var addCols = function (num) {
    //     for (var i = 1; i <= num; i++) {

            // var myCol = $('<div class="row" id="display"> </div>');
            // var myPanel = $('<div class="card card-outline-info" id="' + i + 'Panel"><div class="card-block"><div class="card-title"><span>Card #' + i + '</span><button type="button" class="close" data-target="#' + i + 'Panel" data-dismiss="alert"><span class="float-right"><i class="fa fa-remove"></i></span></button></div><p>Some text in ' + i + ' </p></div></div>');
            // myPanel.appendTo(myCol);
            // myCol.appendTo('#contentPanel');



    // var myRow = $('<div class="row" id="display"> </div>');
    // var myCard = $("<div class='card-body info' style= 'margin: 0; padding: 0;'> <input id= 'chk_all' type='checkbox' class='delete-checkbox' name='delete-checkbox[]' value='$id'> <div class='items text-center' style='justify-content:center; align-items: center; margin: 0; padding: 0;'> <div class='items text-center' style='justify-content:center; align-items: center; margin: 0; padding: 0;'> </div> </div> </div>");



    // var myPanel = $('<div class="card card-outline-info" id="' + i + 'Panel"><div class="card-block"><div class="card-title"><span>Card #' + i + '</span><button type="button" class="close" data-target="#' + i + 'Panel" data-dismiss="alert"><span class="float-right"><i class="fa fa-remove"></i></span></button></div><p>Some text in ' + i + ' </p><img src="//placehold.it/50/eeeeee" class="rounded rounded-circle"></div></div>');


    // myCard.appendTo(myRow);
    // myCol.appendTo('#cards');

    // }

    // };

    // $('#create-cards').click(function () {
    //     addCols(1);
    //     return false;
    // });


