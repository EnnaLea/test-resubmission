<?php

// include_once("init.php");

class Furniture extends Products
{




    public function setValue()
    {
        global $data;

        if (isset($_POST['save_product'])) {

            if (isset($_POST['type-switcher'])) {
                // $err = "Please, submit required data";

                if (empty($_POST['width'])) {
                }

                if (empty($_POST['lenght'])) {
                }

                if (empty($_POST['height'])) {
                }
                echo "";
            }

            $sku  = $_POST['sku'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $type = $_POST['type-switcher'];
            $height = $_POST['height'];
            $width = $_POST['width'];
            $lenght = $_POST['lenght'];

            $sql = "INSERT INTO product(sku, name , price, type, height, width, lenght) VALUES('$sku', '$name', '$price', '$type', '$height', '$width', '$lenght')  ";

            $data->__construct();
            $data->query($sql);

            header("Location: index.php");
            exit();
        }
    }
}
