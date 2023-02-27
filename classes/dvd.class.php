<?php

// include_once("init.php");

class Dvd extends Products
{
    public $size = "";

    //specialization
    public function setValue()
    {
        global $data;

        if (isset($_POST['save_product'])) {

            $sku  = $_POST['sku'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $type = $_POST['type-switcher'];
            $size = $_POST['size'];

            $sql = "INSERT INTO product(sku, name , price, type, size) VALUES('$sku', '$name', '$price', '$type', '$size') ";

            $data->__construct();
            $data->query($sql);

            header("Location: index.php");
        }
    }


    // public function getValue()
    // {
    //     global $data;

    //     if (isset($_POST['save_product'])) {

    //         $sku  = $_POST['sku'];

    //         $query = "SELECT sku, name , price, type, size FROM product WHERE sku ";

    //         $result = $data->query($query);

    //         if ($result->num_rows > 0) {
    //             $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //         }


    //         foreach ($result as $data) {

    //             echo "

    //                     <div class='row row-cols-1 row-cols-sm-2 row-cols-md-4 d-flex' id='display'>

    //                     <div class='col' id='info'>

    //         <div class='card' margin: 0; padding-top: 2%; padding-bottom:0;>
    //             <div class='card-body info' style= 'dispaly: flex; margin: 0; padding: 0;'>
    //             <input type='checkbox'>
    //             <div class='items text-center'>

    //             <table style='justify-content:center; align-items: center;'>
    //         <tbody >
    //             <tr class='row' style='font-weight: bold; font-size: 1.5rem;'> " .
    //                 " <td> " . $data['sku'] . "</td>
    //                 <td> " . $data['name'] . "</td>
    //                 <td>" . $data['price'] . "</td>
    //                 <td>" . $data['type'] . "</td>
    //                 <td>" . $data['size'] . "</td>
    //             </tr>
    //         </tbody>
    //     </table>
    //         </div>
    //         </div>

    //         </div>
    //         </div>
    //     </div>";
    //         }

    //     }
    // }


    // public function display()
    // {

    //     global $data;

    //     $query = "SELECT * FROM product ";

    //     $result = $data->query($query);

    //     if ($result->num_rows > 0) {
    //         $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //     }


    //     foreach ($result as $data) {

    //         echo "

    //                     <div class='row' id='display' >

    //                     <div class='col' id='info'> 

    //         <div class='card' style = 'margin: 0; padding-top: 0.5rem; padding-bottom:0.5rem; dispaly: flex; '>
    //             <div class='card-body info' style= 'dispaly: flex; margin: 0; padding: 0;'>
    //             <input type='checkbox'>
    //             <div class='items text-center style='justify-content:center; align-items: center; margin: 0; padding: 0; ''>

    //             <table style='justify-content:center; align-items: center; margin: 0; padding: 0; '>
    //         <tbody >
    //             <tr class='row' style='font-weight: bold; font-size: 1.2rem;'> " .
    //             " <td> " . $data['sku'] . "</td>
    //                 <td> " . $data['name'] . "</td>
    //                 <td>" . $data['price'] . "</td>
    //                 <td>" . $data['type'] . "</td>
    //                 <td>" . $data['weight'] . "</td>
    //                 <td>" . $data['size'] . "</td>
    //                 <td>" . $data['lenght'] . "</td>
    //                 <td>" . $data['width'] . "</td>
    //                 <td>" . $data['height'] . "</td>
    //             </tr>
    //         </tbody>
    //     </table>
    //         </div>
    //         </div>

    //         </div>
    //         </div>
    //     </div>";
    //     }
    // }


    public function delete()
    {
        global $data;

        if (isset($_POST['delete_product'])) {

            header("Location: index.php");
        }
    }
}
