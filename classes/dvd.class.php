<?php

// include_once("init.php");

class Dvd extends Products
{
    public $size = "";

    //specialization
    public function setValue()
    {
        global $data;

        if (isset($_POST['save_product'])) {

            if (isset($_POST['type-switcher'])) {
                // $err = "Please, submit required data.   ";

                if (empty($_POST['size'])) {
                    echo " no";
                }
            }

            $sku  = $_POST['sku'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $type = $_POST['type-switcher'];
            $size = $_POST['size'];

            $sql = "INSERT INTO product(sku, name , price, type, size) VALUES('$sku', '$name', '$price', '$type', '$size') ";

            $data->query($sql);

            header("Location: index.php");
            exit();
        }
    }
}
