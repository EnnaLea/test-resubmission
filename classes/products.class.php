<?php

// include_once("init.php");

abstract class Products extends Database
{


    //save data
    abstract function setValue();


    //display data
    abstract function getValue();


    //delete product one at time
    // protected function delete()
    // {
    //     global $data;
    //     if (isset($_POST['delete_product'])) {

    //         $id = $_POST['sku'];

    //         $sql = "DELETE FROM product WHERE sku = $id ";

    //         $data->__construct();
    //         $data->query($sql);
    //     }
    // }


    // auto instatiantion
    // public static function instatiantion($the_record)
    // {
    //     $calling_class = get_called_class();
    //     $the_object = new $calling_class;

    //     foreach ($the_record as $the_attribute => $value) {

    //         if ($the_object->has_the_attribute($the_attribute)) {
    //             $the_object->$the_attribute = $value;
    //         }
    //     }

    //     return $the_object;
    // }
}

// $product = new Product();
