<?php

trait NewClass
{
    public function addClass($class)
    {
        $classes = array();

        if (isset($_POST['type-switcher'])) {
            $product_name = $_POST['type-switcher'];
            for ($i = 0; $i < count($classes); $i++) {
                $product = new $product_name;
                $classes[$i] = [$product];
            }
            // return $classes;
            return $this->addClass($class);
        }
    }

    //     for ($i = 0; $i < count($classes); $i++) {
    //         $classes[$i] = [$class];
    //     }
    //     return $classes;
    // }

    // public function createClass($class)
    // {
    //     $this->addClass($class);
    //     return $this;
    // }
}
