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


    // alert("hello");



    var addCols = function (num) {
        // for (var i = 1; i <= num; i++) {

        //     var myCol = $('<div class="col-sm-3 col-md-3 pb-2"></div>');
        //     var myPanel = $('<div class="card card-outline-info" id="' + i + 'Panel"><div class="card-block"><input type="checkbox"><div class="card-title"><span> Some quick example text' + i + '</span ></div ></div ></div > ');
        //     myPanel.appendTo(myCol);
        //     myCol.appendTo('#contentPanel');

        // }
        for (var i = 1; i <= num; i++) {

            var myCol = $('#display');
            var myPanel = $('#info');
            myPanel.appendTo(myCol);
            myCol.appendTo('#contentPanel');

        }


        // $('.close').on('click', function (e) {
        //     e.stopPropagation();
        //     var $target = $(this).parents('.col-sm-3');
        //     $target.hide('slow', function () { $target.remove(); });
        // });
    };


    // $('#btnGen').click(function () {
    //     addCols(1);
    //     return false;
    // });


    // $('#save').click(function () {
    //     addCols(1);
    //     return false;
    // });





});









// alert("hello!");
