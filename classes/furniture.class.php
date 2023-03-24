<?php

class Furniture extends Products implements Calling
{

    // query to save value from the form
    public function setValue()
    {
        global $data;

        if (isset($_POST['save_product'])) {

            $sku = $this->clean($_POST['sku']);
            $name = $this->clean($_POST['name']);
            $price = $this->clean($_POST['price']);
            $type = $this->clean($_POST['type-switcher']);
            $height = $this->clean($_POST['height']);
            $width = $this->clean($_POST['width']);
            $length = $this->clean($_POST['length']);

            $sql = "INSERT INTO product(sku, name , price, type, height, width, length) VALUES('$sku', '$name', '$price', '$type', '$height', '$width', '$length')  ";

            $data->query($sql);

            header("Location: index.php");
            exit();
        }
    }

    // query to get value from the database and to display it in card form
    public function getValue()
    {
        global $data;

        $query = "SELECT id, sku, name, price, height, width, length FROM product WHERE type = 'furniture' ";

        $result = $data->query($query);

        while ($row = mysqli_fetch_assoc($result)) {
            $products[] = $row;
        }


        if (!empty($products)) {
            $encoded_data = json_encode($products, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            file_put_contents('furniture.json', $encoded_data);
        } else {
            if (file_exists("furniture.json")) {
                unlink("furniture.json");
            }
        }
    }

    // function to manage product choice
    public function call()
    {
        return $this->setValue();
    }
}
