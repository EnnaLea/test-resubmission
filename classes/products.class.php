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




    //save data
    abstract function setValue();


    //display data
    abstract function getValue();

    public function clean($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
