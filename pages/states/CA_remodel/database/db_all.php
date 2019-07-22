<?php
    //  Variable initialization
    static $id = "";
    $arrayStatus = False;

    function queryAll($counties, $sql) {

        //  Testing to see if a connection has been made. 
        $conn = openConnection();
        
        echo '<section id="allcounties">';

        //  Display each record on the page depending on the county.
        foreach($counties as $c ) {
            echo "<section id=". $c. "><h3>", $c, "</h3>";

            //  Queries
            $result = mysqli_query($conn, $sql);

            //  Initialize counter
            $i = 0;

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)) {

                    //  Determines if the next record has the same id
                    if ($row["id"] == $id) {
                        $arrayStatus = True;
                        echo $row["insurance"]. "<br>";
                        continue;
                    } 

                    if ($row["id"] != $id) {
                        $arrayStatus = False;
                    }

                    //  Sets the static variable
                    $id = $row["id"];

                    ///////////////////////////////////////
                    //  If it's the first entry.
                    if ($i == 0 && $arrayStatus == False) {
                    echo 
                    "<ul>
                    <li><h4>Dr. ". $row["last_name"]. "</h4></li>
                    <li><span>".
                            $row["phone_number"]. "<br>".
                            $row["street_address"]. "<br>".
                            $row["insurance"]. "<br>";
                    }

                    //////////////////////////////////////////////////////
                    //  If it's not the first entry but a different row ID
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

                    //  Accumulates the counter.
                    $i++;
                }
                echo 
                "</section>";
            } else {
                echo "Query returned no records.</section>";
            }
        }
    }

    echo '</section>';

    closeConnection($conn);
?>