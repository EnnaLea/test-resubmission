<?php

// include_once("init.php");


//specialization
class Book extends Products
{


    public function setValue()
    {
        global $data;

        if (isset($_POST['save_product'])) {

            if (isset($_POST['type-switcher'])) {
                // $err = "Please, submit required data";

                if (empty($_POST['weight'])) {
                    echo "";
                }
            }

            $sku = $_POST['sku'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $type = $_POST['type-switcher'];
            $weight = $_POST['weight'];

            $sql = "INSERT INTO product(sku, name , price, type, weight) VALUES('$sku', '$name', '$price', '$type', '$weight') ";

            $data->query($sql);

            header("Location: index.php");
            exit();
        }
    }
}
