<?php

// can become Trait
class Display
{
    public $err;
    public $nameErr;

    public function setErrors($err, $nameErr)
    {
        $this->err = $err;
        $this->nameErr = $nameErr;
    }



    public function new()
    {

        $dvd = new Dvd;
        $book = new Book;
        $furniture = new Furniture;

        $class = array($book, $dvd, $furniture);

        return $class;
    }

    public function showProduct()
    {
        $pruduct_type = $this->new();

        foreach ($pruduct_type as $product) {
            $product->getValue();
        }
    }


    public function errors()
    {
        global $data;

        $data = new Database;

        $err = "Please, submit required data.  ";

        if (isset($_POST['save_product'])) {

            if (empty($_POST['sku'])) {
                echo $nameErr = "SKU is required.  ";
            }

            if (empty($_POST['name'])) {
                echo $nameErr = "Name is required.  ";
            }

            if (empty($_POST['price'])) {
                echo $nameErr = "Price is required.  ";
            }

            return $err;
        }
    }

    public function cancelAdd()
    {
        if (isset($_POST['delete_product'])) {

            header("Location: index.php");
            exit();
        }
    }

    public function massDelete()
    {

        global $data;
        if (isset($_POST['mass_delete'])) {

            if (isset($_POST['delete-checkbox'])) {

                $checkbox = $_POST['delete-checkbox'];

                foreach ($checkbox as $checkId) {

                    $sql = "DELETE FROM product WHERE id = $checkId  ";

                    $data->query($sql);
                }

                header("Location: index.php");
                exit();
            }
        }
    }
}
