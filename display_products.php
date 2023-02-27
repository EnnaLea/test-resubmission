<?php
include_once("./includes/head.php");
include_once("init.php");

?>



<main>

    <div class="main album py-5 bg-light">

        <!-- <div class=" container">
            <h2>Add some cards..</h2>
            <form class="form-inline">
                <button type="button" class="btn btn-info" id="btnGen">Generate</button>
            </form>
            <br>
            <div class="row" id="contentPanel">
            </div> -->
        <?php

        $data = new Database();
        $class_call = new CallType();
        $class_call->call();
        // $class_call->delete();


        // $data = new Database;
        // $dvd = new Dvd();
        // $dvd->getValue();
        // $furniture = new Furniture();
        // $furniture->setValue();
        // print_r($furniture->getValue());


        ?>


    </div>













    <!-- foreach ($result as $data) {


        echo "<table class='table table-bordered sm-6'>
            <thead>
                <tr>
                    <th>SKU</th>
                    <th>NAME</th>
                    <th>PRICE</th>
                    <th>TYPE</th>
                    <th>SIZE</th>
                </tr>
            </thead>
            <tbody>
                <tr> " .
                    " <td> " . $data['sku'] . "</td>
                    <td> " . $data['name'] . "</td>
                    <td>" . $data['price'] . "</td>
                    <td>" . $data['type'] . "</td>
                    <td>" . $data['size'] . "</td>
                </tr>
            </tbody>
        </table>";

        }

        while ($result = $data->query($query)) {


        echo "

        <div class='col-sm-3 col-md-3 pb-2'>

            <div class='card card-outline-info' id=''>
                <input type='checkbox'>

                <div class='card-title'>
                    <span> Product </span>
                </div>
                <div class='card-body info'>

                    <div> class='desc'>" . $result['sku'] . "</div>
                    <div> class='desc'>" . $result['name'] . "</div>
                    <div> class='desc'>" . $result['price'] . "</div>
                    <div> class='desc'>" . $result['type'] . "</div>
                    <div> class='desc'>" . $result['size'] . "</div>
                </div>

            </div>
        </div>
        "; -->

    </div>


    <?php include_once("./includes/footer.php") ?>