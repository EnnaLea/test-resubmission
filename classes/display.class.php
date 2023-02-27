<?php


class Display
{
    public function getDisplay()
    {

        global $data;

        $query = "SELECT * FROM product ";

        $result = $data->query($query);

        while ($row = mysqli_fetch_array($result)) {

            $sku = $row['sku'];
            $name = $row['name'];
            $price = $row['price'];
            $type = $row['type'];
            $weight = $row['weight'];
            $size = $row['size'];
            $lenght = $row['lenght'];
            $width = $row['width'];
            $height = $row['height'];

            echo "

            <div class='row' id='display' >

            <div class='col' id='info'> 

            <div class='card' style = 'margin: 0; padding-top: 0.5rem; padding-bottom:0.5rem; dispaly: flex; '>
                <div class='card-body info' style= 'dispaly: flex; margin: 0; padding: 0;'>
                <input type='checkbox' class='delete-checkbox' name='delete-checkbox[]' value='$sku'>
                <div class='items text-center style='justify-content:center; align-items: center; margin: 0; padding: 0; ''>
                                
                <table style='justify-content:center; align-items: center; margin: 0; padding: 0; '>
            <tbody >
                <tr class='row' style='font-weight: bold; font-size: 1.2rem;'> " .
                " <td> " . $sku . "</td>
                    <td> " . $name . "</td>
                    <td>" . $price . "</td>
                    <td>" . $type . "</td>
                    <td>" . $weight . "</td>
                    <td>" . $size . "</td>
                    <td>" . $lenght . "</td>
                    <td>" . $width . "</td>
                    <td>" . $height . "</td>
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



    public function massDelete()
    {

        global $data;
        if (isset($_POST['mass_delete'])) {

            if (isset($_POST['delete-checkbox']))

                foreach ($_POST['delete-checkbox'] as $checkId) {

                    $sql = "DELETE FROM product WHERE sku = $checkId ";

                    $data->query($sql);

                    header("Location: index.php");
                    exit();
                }
        }
    }
}
