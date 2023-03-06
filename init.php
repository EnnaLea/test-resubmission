<?php
spl_autoload_register(function ($classname) {
    include("classes/" . strtolower($classname) . ".class.php");
});
