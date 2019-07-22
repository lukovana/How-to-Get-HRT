<?php
    // Queries through database depending on county ($c) 
    $query = "SELECT * FROM `psychologists`, `contactInfo`, `insuranceCoverage`
            WHERE   `psychologists`.`county` = '$c' AND
                    `insuranceCoverage`.`id` = `psychologists`.`id` AND
                    `contactInfo`.`id` = `psychologists`.`id`";
?>