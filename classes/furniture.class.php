<?php

// include_once("init.php");

class Furniture extends Products
{

    // public $height = "";
    // public $width = "";
    // public $lenght = "";


    //specialization
    public function setValue()
    {
        global $data;

        if (isset($_POST['save_product'])) {

            $sku  = $_POST['sku'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $type = $_POST['type-switcher'];
            $height = $_POST['height'];
            $width = $_POST['width'];
            $lenght = $_POST['lenght'];

            $sql = "INSERT INTO product(sku, name , price, type, height, width, lenght) VALUES('$sku', '$name', '$price', '$type', '$height', '$width', '$lenght')  ";

            $data->__construct();
            $data->query($sql);
        }
    }

    public function getValue()
    {
        global $data;

        if (isset($_POST['save_product'])) {

            $sku  = $_POST['sku'];

            $query = "SELECT sku, name , price, type, height, width, lenght FROM product WHERE sku = $sku  ";

            $result = $data->query($query);

            if ($result->num_rows > 0) {
                $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
            }

            foreach ($result as $data) {


                echo "<table class='table table-bordered sm-6'>
        <thead>
         <tr>
            <th>SKU</th>
            <th>NAME</th>
            <th>PRICE</th>
            <th>TYPE</th>
            <th>HEIGHT</th>
            <th>WIDTH</th>
            <th>LENGHT</th>
          </tr>
        </thead>
        <tbody> 
          <tr> " .
                    " <td> " . $data['sku'] . "</td>
            <td> " . $data['name'] . "</td>
            <td>" . $data['price'] . "</td>
            <td>" . $data['type'] . "</td>
            <td>" . $data['height'] . "</td>
            <td>" . $data['width'] . "</td>
            <td>" . $data['lenght'] . "</td>
          </tr>
        </tbody>
      </table>";
            }
        }



        // include_once("./display_products.php");


        // global $data;

        // if (isset($_POST['save_product'])) {

        //     $sku  = $_POST['sku'];

        //     $query = "SELECT sku, name , price, type, height, width, lenght FROM product WHERE sku = $sku ";
        //     $result = $data->query($query);
        //     if ($result->num_rows > 0) {
        //         $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //     }

        //     return $options;
        // }
    }

    public function delete()
    {
        global $data;
        $this->delete();
    }
}
