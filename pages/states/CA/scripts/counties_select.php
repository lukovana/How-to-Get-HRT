<?php
    include 'counties.php';

    $countylength = count($counties);

    # everything before the loop starts
    echo 
    '<select name="county" class="formselect">';

    # loop start: 0-49
    for($i = 0; $i < $countylength; $i++) {
    echo '<option value="', $counties[$i],'">', $counties[$i],'</option>';
    }

    # closing tags for the nav
    echo
    '</select>';
?>