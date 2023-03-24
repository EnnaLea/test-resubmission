<?php

class Dvd extends Products implements Calling
{

    // query to save value from the form
    public function setValue()
    {
        global $data;

        if (isset($_POST['save_product'])) {

            if (isset($_POST['type-switcher'])) {

                if (empty($_POST['size'])) {
                    echo "";
                }
            }

            $sku = $this->clean($_POST['sku']);
            $name = $this->clean($_POST['name']);
            $price = $this->clean($_POST['price']);
            $type = $this->clean($_POST['type-switcher']);
            $size = $this->clean($_POST['size']);
            $sql = "INSERT INTO product (sku, name , price, type, size) VALUES('$sku', '$name', '$price', '$type', '$size') ";
            $data->query($sql);

            header("Location:index.php");
            exit();
        }
    }

    // query to get value from the database and to display it in card form
    public function getValue()
    {
        global $data;

        $query = "SELECT id, sku, name, price, size FROM product WHERE type = 'DVD' ";

        $result = $data->query($query);

        while ($row = mysqli_fetch_assoc($result)) {

            $products[] = $row;
        }

        if (!empty($products)) {
            $encoded_data = json_encode($products, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            file_put_contents('dvd.json', $encoded_data);
        } else {

            if (file_exists("dvd.json")) {
                unlink("dvd.json");
            }
        }
    }

    // function to manage product choice
    public function call()
    {
        return $this->setValue();
    }
}
