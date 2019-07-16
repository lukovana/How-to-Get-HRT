<?php

include 'states.php';
$states;
$stateslength;

function nav($back, $back2) {

    global $states;
    global $stateslength;

    # everything before the loop starts
    echo 
    '<nav id="navdropdown"><ul>
        <div id="dropdown">
            <a href="', $back2, 'states.php"><li id="dropbutton" class="mobiledropitem">States</li></a>
            <div class="dropitems" onmouseover="bluebutton()">
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
            <a href="', $back2, 'faq.php"><li class="mobiledropitem">FAQ</li></a>
            <a href="', $back2, 'contact.php"><li class="mobiledropitem">Contact Us</li></a>
            <a href="', $back2, 'about.php"><li class="mobiledropitem">About Us</li></a>
        </ul>
    </nav>';
}
?>