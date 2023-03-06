<?php

class Furniture extends Products implements Calling
{


    public function setValue()
    {
        global $data;

        if (isset($_POST['save_product'])) {

            if (isset($_POST['type-switcher'])) {


                if (empty($_POST['width'])) {
                }

                if (empty($_POST['lenght'])) {
                }

                if (empty($_POST['height'])) {
                }
                echo "";
            }

            $class = strtolower($_POST['type-switcher']);

            if ($class == 'furniture') {

                $sku = $this->clean($_POST['sku']);
                $name = $this->clean($_POST['name']);
                $price = $this->clean($_POST['price']);
                $type = $_POST['type-switcher'];
                $height = $this->clean($_POST['height']);
                $width = $this->clean($_POST['width']);
                $lenght = $this->clean($_POST['lenght']);

                $sql = "INSERT INTO product(sku, name , price, type, height, width, lenght) VALUES('$sku', '$name', '$price', '$type', '$height', '$width', '$lenght')  ";

                $data->query($sql);

                header("Location: index.php");
                exit();
            }
        }
    }


    public function getValue()
    {
        global $data;

        $query = "SELECT id, sku, name, price, height, width, lenght FROM product WHERE type = 'furniture' ";

        $result = $data->query($query);

        while ($row = mysqli_fetch_array($result)) {

            $id = $row['id'];

            $sku = $row['sku'];
            $name = $row['name'];
            $price = $row['price'];
            $lenght = $row['lenght'];
            $width = $row['width'];
            $height = $row['height'];

            echo "
    <div class='row' id='display'>

        <div class='col' id='info'>

            <div class='card' style='margin: 0; padding-top: 0.5rem; padding-bottom:0.5rem; dispaly: flex; '>
                <div class='card-body info' style='dispaly: flex; margin: 0; padding: 0;'>
                    <input id='chk_all' type='checkbox' class='delete-checkbox' name='delete-checkbox[]' value='$id'>
                    <div class='items text-center style=' justify-content:center; align-items: center; margin: 0; padding: 0; ''>

                        <table style='justify-content:center; align-items: center; margin: 0; padding: 0; '>
                            <tbody>
                                <tr class='row' style='font-weight: bold; font-size: 1.2rem;'>
                                    <td> " . $sku . "</td>
                                    <td> " . $name . "</td>
                                    <td>" . $price . "$" . "</td>
                                    <td>" . "Dimension: " . $height . "x" . $width . "x" . $lenght . "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>";
        }
    }

    public function call()
    {
        return $this->getValue();
    }
}
