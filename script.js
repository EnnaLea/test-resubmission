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


});










