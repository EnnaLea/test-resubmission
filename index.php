<?php

// da togliere una volta finito il progetto
include_once("./includes/head.php");
// include_once("./classes/dvd.class.php");

?>




<header>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <strong>Your@Shop</strong>
      </a>
    </div>
  </div>
</header>

<main>

  <form action="get">


    <section class="py-5 text-center container ">
      <div class="heading row py-lg-5 ">
        <div class="row ">
          <div class="header col-lg">
            <span class="product col">
              <h1 class=" fw-light">Product List</h1>
            </span>
            <span class="product-buttons col"><a href="add_product.php" class=" btn btn-primary my-2">ADD</a>
              <a href="#" id="delete-product-btn" class="btn btn-secondary my-2">MASS DELETE</a></span>
          </div>

        </div>
      </div>
    </section>

    <div class="main album py-5 bg-light">
      <div class="container-fluid">









        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 d-flex">

          <?php
          $data = new Database;
          $product = new Display();
          // $dvd->getValue();
          // $dvd->setValue();
          $product->display();
          // print_r($dvd->getValue());

          // $data = new Database;
          // $furniture = new Furniture();
          // $furniture->setValue();
          // $furniture->getValue();

          // include_once("./display_products.php");

          ?>

        </div>





      </div>


    </div>


    </div>





  </form>



  <!-- da togliere una volta finito il progetto -->
  <?php include("./includes/footer.php") ?>