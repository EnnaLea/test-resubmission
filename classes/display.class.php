<?php


class Display
{





    public function showProduct()
    {
        global $data;

        $dvd = new Dvd;
        $dvd->getValue();

        $book = new Book;
        $book->getValue();

        $furniture = new Furniture;
        $furniture->getValue();
    }





    public function errors()
    {
        global $data;

        $data = new Database;

        $err = "Please, submit required data.";

        if (isset($_POST['save_product'])) {

            if (empty($_POST['sku'])) {
            }

            if (empty($_POST['name'])) {
            }

            if (empty($_POST['price'])) {
            }

            echo $err;
        }
    }



    public function massDelete()
    {

        global $data;
        if (isset($_POST['mass_delete'])) {

            if (isset($_POST['delete-checkbox'])) {

                $checkbox = $_POST['delete-checkbox'];

                foreach ($checkbox as $checkId) {

                    $sql = "DELETE FROM product WHERE sku = $checkId  ";

                    $data->query($sql);
                }

                header("Location: index.php");
                exit();
            }
        }
    }
}
