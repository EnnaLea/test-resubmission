<?php

// global $data;

//to change: do not use conditionals
// if (isset($_POST['save_product'])) {
//     $class = strtolower($_POST['type-switcher']);

//     switch ($class) {
//         case 'dvd':
//             $dvd = new Dvd();
//             $dvd->setValue();
//             $dvd->getValue();
//             $dvd->delete();
//             break;
//         case 'book':
//             $book = new Book();
//             $book->setValue();
//             $book->getValue();
//             $book->delete();
//             break;
//         case 'furniture':
//             $furniture = new Furniture();
//             $furniture->setValue();
//             $furniture->getValue();
//             $furniture->delete();
//             break;

//         default:

//             break;
//     }
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <!-- <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Contact Form</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="insert.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="mobile" name="mobile" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div> -->

    <!-- using php inside javascript -->
    <?php
    $lang = array("success" => lang("success"), "danger" => lang("danger"));
    function lang($word)
    {
        //  use your real lang function!
        return "OK";
    };
    ?>
    <script>
        var lang = <?php echo  json_encode($lang); ?>;
        alert(lang.success)
    </script>


    <div class="container">
        <h2>Add some cards..</h2>
        <form class="form-inline">
            <input class="form-control col-1" type="text" id="numPanels" value="17" maxlength="3" />
            <button type="button" class="btn btn-info" id="btnGen">Generate</button>
        </form>
        <br>
        <div class="row" id="contentPanel">

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="script.js"></script>

</body>

</html>