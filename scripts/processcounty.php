<?php

    $county = "";

    // this probably parses the data?
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $county = test_input($_POST["county"]);
        $name = test_input($_POST["name"]);
    }

?>