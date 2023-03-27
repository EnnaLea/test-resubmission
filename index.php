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



    <title>Product List</title>



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

            </div>

        </div>

    </header>

    <main>


        <form method="post" id="">

            <section class="py-5 text-center container ">

                <div class="heading row py-lg-5 ">

                    <div class="row ">

                        <div class="header col-lg">

                            <span class="product col">

                                <h1 class=" ">Product List</h1>

                            </span>

                            <span class="product-buttons col"><a href="add_product.php" class=" btn button-first  my-2">ADD</a>

                                <button id="delete-product-btn" type="submit" name="mass_delete" class="btn button-second my-2" value="mass_delete">MASS DELETE</button>

                            </span>

                        </div>

                    </div>

                </div>

            </section>

            <div class="main album py-5 bg-light">

                <div class="container-fluid">

                    <div id="product-card" class="product-card row row-cols-1 row-cols-xs-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3  d-flex">

                        <?php
                        $data = new Database();
                        $product = new Display();
                        $product->massDelete();
                        $product->showProduct();
                        ?>

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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>


    <script src="javascript/script.js"></script>

</body>

</html>