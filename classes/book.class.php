<?php


class Book extends Products implements Calling
{

    // query to save value from the form
    public function setValue()
    {
        global $data;

        if (isset($_POST['save_product'])) {

            if (isset($_POST['type-switcher'])) {

                if (empty($_POST['weight'])) {
                    echo "";
                }
            }

            $sku = $this->clean($_POST['sku']);
            $name = $this->clean($_POST['name']);
            $price = $this->clean($_POST['price']);
            $type = $this->clean($_POST['type-switcher']);
            $weight = $this->clean($_POST['weight']);

            $sql = "INSERT INTO product (sku, name , price, type, weight) VALUES('$sku', '$name', '$price', '$type', '$weight') ";

            $data->query($sql);

            header("Location: index.php");
            exit();
        }
    }

    // query to get value from the database and to display it in card form
    public function getValue()
    {
        global $data;

        $query = "SELECT id, sku, name, price, weight FROM product WHERE type = 'Book' ";

        $result = $data->query($query);

        while ($row = mysqli_fetch_assoc($result)) {
            $products[] = $row;
        }

        if (!empty($products)) {
            $encoded_data = json_encode($products, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            file_put_contents('book.json', $encoded_data);
        } else {
            if (file_exists("book.json")) {
                unlink("book.json");
            }
        }
    }

    // function to manage product choice
    public function call()
    {
        return $this->setValue();
    }
}
