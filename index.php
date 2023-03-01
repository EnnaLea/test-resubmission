<?php

// da togliere una volta finito il progetto
include_once("./includes/head.php");

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

  <form method="post">


    <section class="py-5 text-center container ">
      <div class="heading row py-lg-5 ">
        <div class="row ">
          <div class="header col-lg">
            <span class="product col">
              <h1 class=" fw-light">Product List</h1>
            </span>
            <span class="product-buttons col"><a href="add_product.php" class=" btn btn-primary my-2">ADD</a>
              <button id="delete-product-btn" type="submit" name="mass_delete" class="btn btn-secondary my-2" value="mass_delete">MASS DELETE</button>
            </span>
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
          $product->showProduct();
          $product->massDelete();

          ?>

        </div>

      </div>

    </div>

    </div>

  </form>



  <!-- da togliere una volta finito il progetto -->
  <?php include("./includes/footer.php") ?>