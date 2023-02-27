<?php


//base behavior
class CallType
{

    public function calling()
    {
        global $data;

        $data = new Database();

        if (isset($_POST['save_product'])) {
            $class = strtolower($_POST['type-switcher']);

            switch ($class) {
                case 'dvd':
                    $dvd = new Dvd();
                    $dvd->setValue();
                    // print_r($dvd->getValue());
                    // $dvd->getValue();
                    $dvd->delete();
                    break;
                case 'book':
                    $book = new Book();
                    $book->setValue();
                    // print_r($book->getValue());
                    // $book->getValue();
                    $book->delete();
                    break;
                case 'furniture':
                    $furniture = new Furniture();
                    $furniture->setValue();
                    // print_r($furniture->getValue());
                    // $furniture->getValue();
                    $furniture->delete();
                    break;

                default:

                    break;
            }
        }
    }

    public function delete()
    {
        // global $data;
        // $this->delete();
    }
}
