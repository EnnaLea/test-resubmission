<?php


class Display
{
    public function display()
    {

        global $data;

        $query = "SELECT * FROM product ";

        $result = $data->query($query);

        if ($result->num_rows > 0) {
            $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }


        foreach ($result as $data) {

            echo "

                        <div class='row' id='display' >

                        <div class='col' id='info'> 

            <div class='card' style = 'margin: 0; padding-top: 0.5rem; padding-bottom:0.5rem; dispaly: flex; '>
                <div class='card-body info' style= 'dispaly: flex; margin: 0; padding: 0;'>
                <input type='checkbox'>
                <div class='items text-center style='justify-content:center; align-items: center; margin: 0; padding: 0; ''>
                                
                <table style='justify-content:center; align-items: center; margin: 0; padding: 0; '>
            <tbody >
                <tr class='row' style='font-weight: bold; font-size: 1.2rem;'> " .
                " <td> " . $data['sku'] . "</td>
                    <td> " . $data['name'] . "</td>
                    <td>" . $data['price'] . "</td>
                    <td>" . $data['type'] . "</td>
                    <td>" . $data['weight'] . "</td>
                    <td>" . $data['size'] . "</td>
                    <td>" . $data['lenght'] . "</td>
                    <td>" . $data['width'] . "</td>
                    <td>" . $data['height'] . "</td>
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

    public function delete()
    {
        global $data;

        $this->delete();
    }
}
