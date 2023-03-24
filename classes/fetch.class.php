<?php


class Fetch extends Display
{
    public function getData()
    {
        global $data;

        // $sql = "SELECT * FROM product ";

        $sql = "SELECT id, sku, name, price, weight FROM product WHERE type = 'book' ";


        $result = $data->query($sql);
        // $return_arr = array();

        // while ($row = mysqli_fetch_array($result)) {

        //     $id = $row['id'];
        //     $sku = $row['sku'];
        //     $name = $row['name'];
        //     $price = $row['price'];
        //     $type = $row['type'];
        //     $weight = $row['weight'];
        //     $size = $row['size'];
        //     $length = $row['length'];
        //     $width = $row['width'];
        //     $height = $row['height'];

        //     $return_arr[] = array(
        //         "id" => $id,
        //         "sku" => $sku,
        //         "name" => $name,
        //         "price" => $price,
        //         "type" => $type,
        //         "weight" => $weight,
        //         "size" => $size,
        //         "length" => $length,
        //         "width" => $width,
        //         "height" => $height,
        //     );
        // }

        // echo json_encode($return_arr);









        $json_array = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $products[] = $row;
        }

        $encoded_data = json_encode($products, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        file_put_contents('data.json', $encoded_data);


        while ($row = mysqli_fetch_assoc($result)) {
            $json_array[] = $row;
        }

        echo json_encode($json_array);
    }

    public function deleteJson()
    {
        unlink("data.json");
    }
}
