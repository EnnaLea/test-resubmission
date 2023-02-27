<?php


//base behavior
class CallType
{

    public function call()
    {
        global $data;

        $data = new Database();

        if (isset($_POST['save_product'])) {
            $class = strtolower($_POST['type-switcher']);

            switch ($class) {
                case 'dvd':
                    $dvd = new Dvd();
                    $dvd->setValue();
                    break;
                case 'book':
                    $book = new Book();
                    $book->setValue();
                    break;
                case 'furniture':
                    $furniture = new Furniture();
                    $furniture->setValue();
                    break;

                default:

                    break;
            }
        }
    }

    public function delete()
    {
        global $data;
        if (isset($_POST['delete_product'])) {

            header("Location: index.php");
            exit();
        }
    }
}
