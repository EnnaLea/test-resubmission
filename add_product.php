<?php
// da togliere una volta finito il progetto 
include_once("./includes/head.php");

session_start();

?>


<header>

  <div class="navbar navbar-dark bg-dark shadow-sm">
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

  <form action="" class="" method="post" id="product_form">

    <section class="py-5 text-center container ">
      <div class="heading row py-lg-5 ">
        <div class="row ">
          <div class="header col-lg">
            <span class="product col">
              <h1 class=" fw-light">Product Add</h1>
            </span>

            <span class="product-buttons col form-group">
              <button id="save" type="submit" name="save_product" class="btn btn-primary my-2 save" value="save_product"> SAVE</button>
              <button id="delete" type="submit" name="delete_product" class="btn btn-secondary my-2" value="delete_product">CANCEL</button>
            </span>

          </div>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-light">


      <?php

      $data = new Database();
      $class_call = new CallType();
      $class_call->call();
      $class_call->delete();
      $err = new Display();
      $err->errors();


      ?>

      <div class="form-group mb-3" style="width: 30rem;">
        <label for="sku">SKU</label>
        <input class="form-control" type="text" name="sku" id="sku" placeholder="">
        <label id="sku-error" class="error" for="sku"></label>
      </div>

      <div class="form-group mb-3" style="width: 30rem;">
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="">
        <label id="name-error" class="error" for="name"></label>
      </div>

      <div class="form-group mb-3" style="width: 30rem;">
        <label for="price">Price($)</label>
        <input class="form-control" type="text" name="price" id="price" placeholder="">
        <label id="price-error" class="error" for="price"></label>
      </div>

      <!-- SELECT OPTION  FORM-->

      <div class="form-group mb-3" style="width: 15rem;">
        <label class="control-label" for="type-switcher">Type Switcher</label>
        <select name="type-switcher" id="productType" class="">
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
            <input class="form-control" name="height" type="text" id="height" placeholder="">


            <label for="width" class="control-label">Width (CM)</label>
            <input class="form-control" name="width" type="text" id="width" placeholder="">


            <label for="length" class="control-label">Length (CM)</label>
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
            <input class="form-control" name="weight" type="text" id="weight" placeholder="">
            <div id="passwordHelpBlock" class="form-text">
              “Please, provide weight in KG.”
            </div>
          </div>
        </div>
      </div>

    </div>

    </div>

  </form>











  <!-- da togliere una volta finito il progetto -->
  <?php include_once("./includes/footer.php") ?>