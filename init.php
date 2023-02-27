<?php

// function to autoload classes
spl_autoload_register(function ($classname) {
    include_once("classes/" . $classname . ".class.php");
});

// include_once("./classes/database.class.php");
// include_once("./classes/products.class.php");
// include_once("./classes/dvd.class.php");
// include_once("./classes/book.class.php");
// include_once("./classes/furniture.class.php");


// database details
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_NAME", "products");
define("DB_PORT", 8889);
