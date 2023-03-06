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



        if (isset($_POST['save_product']) && isset($_POST['type-switcher'])) {



            if (!empty($_POST['type-switcher']) && $_POST['type-switcher'] !== 'Type Switcher') {

                $product_name = $_POST['type-switcher'];
                $product = new $product_name;
                return $this->set($product);
            } else {
                $this->errors();
                echo $nameErr = "Type is required.  ";
            }
        }
    }
}
