<?php


abstract class Products extends Database
{

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
