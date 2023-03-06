<?php


class TypeController extends Display
{





    public function set(Calling $productClass)
    {
        $product = $productClass->call();
        return $product;
    }

    public function insert()
    {

        //devo mantenere i campi salvati come fare?

        if (isset($_POST['save_product'])) {

            $this->errors();

            //controlla solo che type non sia vuoto
            if (!empty($_POST['type-switcher']) && $_POST['type-switcher'] !== 'Type Switcher') {

                $product_name = $_POST['type-switcher'];
                $product = new $product_name;
                return $this->set($product);
            } else {

                echo $nameErr = "Type is required.  ";
            }
        }
    }
}
