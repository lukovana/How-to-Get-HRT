<?php
    //  Testing to see if a connection has been made. 
    $conn = openConnection();

    function getInsuranceList($state, $c) {

        global $conn;

        //  Queries
        $sql = "SELECT * FROM `insuranceCounties` WHERE `county` =  '$c' AND `state` = '$state'"; 

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            echo
            '<select name="insurance" class="formselect">';

            while($row = mysqli_fetch_array($result)) {
                echo '<option value="', $row['insurance'], '">', $row['insurance'], '</option>';
            }

            echo '</select>';
        } else {
            echo "";
        }
    }

?>