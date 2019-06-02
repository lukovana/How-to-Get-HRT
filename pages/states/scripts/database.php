<?php
    function openConnection() {
        $dbhost = "localhost";
        $dbuser = "u839846301_user";
        $dbpass = "Gon!!405";
        $db = "u839846301_trans";
        $dbport = "3306";

        // die() is the same as exit()
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db, $dbport);
        
        if(!$conn) {
            die("connection failed ! ! ! !" . mysqli_connect_error());
        }

        return $conn;
    }

    function closeConnection($connection) {
        $connection -> close();
    }
?>