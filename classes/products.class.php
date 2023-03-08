<?php


abstract class Products extends Database
{
    // protected $sku;
    // protected $name;
    // protected $price;
    // protected $type;
    // protected $weight;
    // protected $lenght;
    // protected $size;
    // protected $width;
    // protected $height;




    //to save data
    abstract function setValue();


    //to display data
    abstract function getValue();

    //input sanitization
    protected function clean($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
