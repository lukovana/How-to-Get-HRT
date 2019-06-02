<?php
    //  Variable initialization
    static $id = "";
    $arrayStatus = False;

    $counties = array(  "Alameda", "Alpine", "Amador", "Butte", "Calaveras", "Colusa", "Contra Costa","Del Norte","El Dorado","Fresno","Glenn","Humboldt","Imperial","Inyo", "Kern","Kings","Lake","Lassen","Los Angeles","Madera", "Marin","Mariposa","Mendocino","Merced","Modoc","Mono","Monterey","Napa","Nevada","Orange","Placer","Plumas","Riverside","Sacramento","San Benito","San Bernardino","San Diego","San Francisco","San Joaquin","San Luis Obispo","San Mateo","Santa Barbara","Santa Clara","Santa Cruz","Shasta","Sierra","Siskiyou","Solano", "Sonoma","Stanislaus","Sutter","Tehama","Trinity","Tulare","Tuolumne","Ventura","Yolo","Yuba");

    //  Testing to see if a connection has been made. 
    $conn = openConnection();
    
    //  Display each record on the page depending on the county.
    foreach($counties as $c ) {
        echo "<section id=". $c. "><h3>", $c, "</h3>";

        //  Queries
        $sql = "SELECT * FROM `psychologists`, `contactInfo`, `insuranceCoverage`
                WHERE   `psychologists`.`county` = '$c' AND
                        `insuranceCoverage`.`id` = `psychologists`.`id` AND
                        `contactInfo`.`id` = `psychologists`.`id`";

        $result = mysqli_query($conn, $sql);

        //  Initialize counter
        $i = 0;

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)) {

                if ($row["id"] == $id) {
                    $arrayStatus = True;
                    echo $row["insurance"]. "<br>";
                    continue;
                } 

                if ($row["id"] != $id) {
                    $arrayStatus = False;
                }

                $id = $row["id"];

                ///////////////////////////////////////
                if ($i == 0 && $arrayStatus == False) {
                echo 
                "<ul>
                <li><h4>Dr. ". $row["last_name"]. "</h4></li>
                <li><span>".
                        $row["phone_number"]. "<br>".
                        $row["street_address"]. "<br>".
                        $row["insurance"]. "<br>";
                }

                ///////////////////////////////////
                if ($i > 0 && $arrayStatus == False) {
                    echo 
                    "</li></span>
                    </li></ul>
                    <ul>
                    <li><h4>Dr. ". $row["last_name"]. "</h4></li>
                    <li><span>".
                            $row["phone_number"]. "<br>".
                            $row["street_address"]. "<br>".
                            $row["insurance"]. "<br>";
                }

                $i++;
            }
            echo 
            "</section>";
        } else {
            echo "Query returned no records.</section>";
        }
    }

    closeConnection($conn);
?>