<?php

function headerfn($back) {
    echo 
    '<header>
        <div id="logo">
            <a href="', $back,'index.php"><img src="', $back,'assets/images/translogo.svg" width="100" alt="Trans Flag Logo"></a>
        </div>
        <span>
            <a href="', $back, 'index.php">How to Get HRT</a>
        </span>
    </header>';
    };
?>