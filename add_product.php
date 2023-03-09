<?php
ob_start();
include_once("init.php");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="" content="">

  <title>Add Product</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" href="css/style.css">
  <!-- <link rel="stylesheet" href="style.css"> -->

</head>

<body>

  <header>
    <div class="navbar navbar-dark  shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <strong>Your@Shop</strong>
        </a>
        <a href="index.php" class="navbar-brand d-flex align-items-center">
          <strong>Home</strong>
        </a>
      </div>
    </div>
  </header>

  <main>




    <form action="" class="product_form" method="post" id="product_form">

      <section class="py-5 text-center container ">
        <div class="heading row py-lg-5 ">
          <div class="row ">
            <div class="header col-lg">
              <span class="product col">
                <h1 class="">Product Add</h1>
              </span>

              <span class="product-buttons col form-group">

                <button id="Save" type="submit" name="save_product" class="btn button-first my-2 save" value="save_product">Save</button>

                <button id="Cancel" type="submit" name="delete_product" class="btn button-second my-2 cancel" value="delete_product">Cancel</button>
                </a>
              </span>

            </div>
          </div>
        </div>
      </section>

      <div class="main album py-5 bg-light" id="no-refresh-form">



        <div class="container-fluid">

          <div id="message_error">
            <!-- All error will display here  -->
          </div>

          <?php
          $data = new Database;
          $err = new Display;
          $class_call = new TypeController;
          $err->cancelAdd();
          $class_call->insert();
          ?>


          <div class="form-group mb-3" style="width: 30rem;">

            <label for="sku">SKU</label>
            <span id="message_error_sku">
              <!-- error will display here  -->
            </span>
            <input class="form-control" type="text" name="sku" id="sku" placeholder="">
          </div>

          <div class="form-group mb-3" style="width: 30rem;">
            <label for="name">Name</label>
            <span id="message_error_name">
              <!-- error will display here  -->
            </span>
            <input class="form-control" type="text" name="name" id="name" placeholder="">
          </div>

          <div class="form-group mb-3" style="width: 30rem;">
            <label for="price">Price($)</label>
            <span id="message_error_price">
              <!-- error will display here  -->
            </span>
            <input class="form-control" type="text" name="price" id="price" placeholder="">
            <label id="price-error" class="error" for="price"></label>
          </div>

          <!-- SELECT OPTION  FORM-->

          <div class="form-group mb-3" style="width: 15rem;">
            <label class="control-label" for="type-switcher">Type Switcher</label>
            <span id="message_error_type">
              <!-- error will display here  -->
            </span>
            <select name="type-switcher" id="productType" class="productType">
              <option value="Type Switcher">---Select type---</option>

              <option class="select-dvd" name="dvd" id="DVD" value="DVD">DVD</option>

              <option class="select-book" id="Book" value="Book">Book</option>

              <option class="select-furniture" id="Furniture" value="Furniture">Furniture</option>
            </select>
          </div>


          <!-- INDIVIDUAL CHOICE FORM -->
          <div class=" form-group formContainer">

            <!-- for dvd -->

            <div class=" container select-option-dvd" id="dvd-form ">
              <div class="form-group mb-3 DVD" style="width: 30rem;">
                <label for="size" class="control-label">Size MB</label>
                <span id="message_error_size">
                  <!-- error will display here  -->
                </span>
                <input name="size" class="form-control" type="text" id="size" placeholder="">
                <div id="passwordHelpBlock" class="form-text">
                  “Please, provide size in MB.”
                </div>
              </div>
            </div>


            <!-- for furniture -->

            <div class=" container furniture-form select-option-furniture">
              <div class=" mb-3" style="width: 30rem;">
                <label for="height" class="control-label">Height (CM)</label>
                <span id="message_error_height">
                  <!-- error will display here  -->
                </span>
                <input class="form-control" name="height" type="text" id="height" placeholder="">


                <label for="width" class="control-label">Width (CM)</label>
                <span id="message_error_width">
                  <!-- error will display here  -->
                </span>
                <input class="form-control" name="width" type="text" id="width" placeholder="">


                <label for="length" class="control-label">Length (CM)</label>
                <span id="message_error_lenght">
                  <!-- error will display here  -->
                </span>
                <input class="form-control" name="lenght" type="text" id="length" placeholder="">

              </div>

              <div id="passwordHelpBlock" class="form-text form-group">
                “Please, provide dimensions in CM.”
              </div>
            </div>

            <!-- for book -->

            <div class="form-group container book-form select-option-book">
              <div class="form-group mb-3" style="width: 30rem;">
                <label for="weight" class="control-label">Weight (KG)</label>
                <span id="message_error_weight">
                  <!-- error will display here  -->
                </span>
                <input class="form-control" name="weight" type="text" id="weight" placeholder="">
                <div id="passwordHelpBlock" class="form-text">
                  “Please, provide weight in KG.”
                </div>
              </div>
            </div>
          </div>



        </div>




      </div>

      </div>

    </form>



  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <strong>
          <a class="footer-link" href="#">Back to top</a>
        </strong>

      </p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>


  <script src="javascript/script.js"></script>
  <script src="script.js"></script>


</body>

</html>