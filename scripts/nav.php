<?php

$states = array(
            array("AK", "Alaska"),
            array("AL","Alabama"),
            array("AR", "Arkansas"),
            array("AZ","Arizona"),
            array("CA", "California"),
            array("CO", "Colorado"),
            array("CT", "Connecticut"),
            array("DE", "Delaware"),
            array("FL", "Florida"),
            array("GA", "Georgia"),
            array("HI", "Hawaii"),
            array("IA", "Iowa"),
            array("ID", "Idaho"),
            array("IL", "Illinois"),
            array("IN", "Indiana"),
            array("KS", "Kansas"),
            array("KY", "Kentucky"),
            array("LA", "Louisiana"),
            array("MA", "Massachusetts"),
            array("MD", "Maryland"),
            array("ME", "Maine"),
            array("MI", "Michigan"),
            array("MN", "Minnesota"),
            array("MO", "Missouri"),
            array("MS", "Mississippi"),
            array("MT", "Montana"),
            array("NC", "North Carolina"),
            array("ND", "North Dakota"),
            array("NE", "Nebraska"),
            array("NH", "New Hampshire"),
            array("NJ", "New Jersey"),
            array("NM", "New Mexico"),
            array("NV", "Nevada"),
            array("NY", "New York"),
            array("OH", "Ohio"),
            array("OK", "Oklahoma"),
            array("OR", "Oregon"),
            array("PA", "Pennsylvania"),
            array("RI", "Rhode Island"),
            array("SC", "South Carolina"),
            array("SD", "South Dakota"),
            array("TN", "Tennessee"),
            array("TX", "Texas"),
            array("UT", "Utah"),
            array("VA", "Virginia"),
            array("VT", "Vermont"),
            array("WA", "Washington"),
            array("WI", "Wisconsin"),
            array("WV", "West Virginia"),
            array("WY", "Wyoming")
            );
$stateslength = count($states);

function nav($back, $back2) {

    global $states;
    global $stateslength;

    # everything before the loop starts
    echo 
    '<nav><ul>
    <div id="mobiledropdown">
        <div id="dropdown">
        <li class="dropbutton"><a href="', $back2, 'states.php">States</a></li>
        <div class="dropitems">
        <div class="states">';

            # loop start: 0-49
            for($i = 0; $i < $stateslength; $i++) {
            echo    '<a href="', $back, $states[$i][0], 
                    '/state.php">', $states[$i][1], '</a>';
            if ($i == 9 || $i == 19 || $i == 29 || $i == 39 ) {
            echo    '</div><div class="states">';
            }
            };

        # closing tags for the nav
        echo
        '</div>
        </div>
        </div>
                <li><a href="', $back2, 'faq.php">FAQ</a></li>
                <li><a href="', $back2, 'contact.php">Contact Us</a></li>
                <li><a href="', $back2, 'about.php">About Us</a></li>
        </div>
        </ul>
    </nav>';
};

function statepage($back) {

    global $states;
    global $stateslength;

    # everything before the loop starts
    echo '<ul>';

    for($i = 0; $i < $stateslength; $i++) {
        echo    '<li class="statebutton"><a href="', $back, $states[$i][0], 
                '/state.php">', $states[$i][1], '</a></li>';
    }

    echo '</ul>';
};

?>