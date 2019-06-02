<?php
    //  THIS IS A TEST TO SEE IF THE CONNECTION HAS BEEN MADE
    $conn = openConnection();
    echo "ding ding ding<br>";

    //  links the query script directly to the db
    $sql = "SELECT * FROM `psychologists`";
    $result = mysqli_query($conn, $sql);

    //  the condition checks if at least more than 0 rows are returned
    //  if SOEMTHING exists from this query
    if (mysqli_num_rows($result) > 0) {
        //  loop that traverses through each record of the db
        while($row = mysqli_fetch_array($result)) {
            echo "Doctor Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
        } 
    } else {
        echo "Query returned no records.";
    }

    closeConnection($conn);
?>