<?php


class Display
{


    // create array of classes
    public function new()
    {

        $dvd = new Dvd;
        $book = new Book;
        $furniture = new Furniture;

        $class = array($book, $dvd, $furniture);

        return $class;
    }

    // using array of classes to display product info 
    public function showProduct()
    {


        $pruduct_type = $this->new();

        foreach ($pruduct_type as $product) {
            $value = $product;
            $value->getValue();
            htmlspecialchars($_SERVER["PHP_SELF"]);
        }
        return $value;
    }


    // to make cancel botton go to index.php
    public function cancelAdd()
    {
        if (isset($_POST['delete_product'])) {

            header("Location: index.php");
            exit();
        }
    }

    // delete query for botton massdelete
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
