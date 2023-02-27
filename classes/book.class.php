<?php

// include_once("init.php");


//specialization
class Book extends Products
{


    public function setValue()
    {
        global $data;

        if (isset($_POST['save_product'])) {

            $sku  = $_POST['sku'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $type = $_POST['type-switcher'];
            $weight = $_POST['weight'];

            $sql = "INSERT INTO product(sku, name , price, type, weight) VALUES('$sku', '$name', '$price', '$type', '$weight') ";

            $data->query($sql);
        }
    }

    // public function getValue()
    // {

    //     global $data;

    //     if (isset($_POST['save_product'])) {

    //         $sku  = $_POST['sku'];

    //         $query = "SELECT sku, name , price, type, weight FROM product WHERE sku = $sku  ";

    //         $result = $data->query($query);

    //         if ($result->num_rows > 0) {
    //             $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //         }

    //         foreach ($result as $data) {


    //             echo "<table class='table table-bordered sm-6'>
    //     <thead>
    //      <tr>
    //         <th>SKU</th>
    //         <th>NAME</th>
    //         <th>PRICE</th>
    //         <th>TYPE</th>
    //         <th>WEIGHT</th>
    //       </tr>
    //     </thead>
    //     <tbody> 
    //       <tr> " .
    //                 " <td> " . $data['sku'] . "</td>
    //         <td> " . $data['name'] . "</td>
    //         <td>" . $data['price'] . "</td>
    //         <td>" . $data['type'] . "</td>
    //         <td>" . $data['weight'] . "</td>
    //       </tr>
    //     </tbody>
    //   </table>";
    //         }




    // global $data;

    // if (isset($_POST['save_product'])) {

    //     $sku  = $_POST['sku'];

    //     $query = "SELECT sku, name , price, type, weight FROM product WHERE sku = $sku ";
    //     $result = $data->query($query);
    //     if ($result->num_rows > 0) {
    //         $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //     }

    //     return $options;
    // }
    // }

    // public function delete()
    // {
    //     global $data;
    //     $this->delete();
    // }
}
