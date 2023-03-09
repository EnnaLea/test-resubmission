<?php


class TypeController extends Display
{

    public $err;

    // function to save product based on type
    public function set(Calling $productClass)
    {
        $product = $productClass->call();
        return $product;
    }

    // function to inserting and saving data to the form based on the product type choice
    public function insert()
    {
        if (isset($_POST['save_product'])) {

            $type = $_POST['type-switcher'];

            if (
                !empty($_POST['type-switcher']) &&
                $_POST['type-switcher'] !== 'Type Switcher' &&
                !empty($_POST['sku']) &&
                !empty($_POST['name']) && !empty($_POST['price']) &&
                'Type Switcher' == $type
            ) {
                // insert query based on the product type choice
                $product_name = $_POST['type-switcher'];
                $product = new $product_name;
                return $this->set($product);
            } else {
                $err = "Please, submit required data.";
                htmlspecialchars($_SERVER["PHP_SELF"]);
            }
        }
    }
}
