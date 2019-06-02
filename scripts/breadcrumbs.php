<?php

function secondtier($back, $tier2name) {
    echo 
    '<div id="breadcrumb">
        <ul>
            <li><a href="', $back, 'index.php">Home</a></li> 
            <li>/</li>
            <li><a href="#" class="current">', $tier2name, '</a></li>
        </ul>
    </div>';
}

function statetier($state) {
    echo 
    '<div id="breadcrumb">
        <ul>
            <li><a href="../../../index.php">Home</a></li> 
            <li>/</li>
            <li><a href="../../states.php">States</a></li>
            <li>/</li>
            <li><a href="state.php" class="statelink current">', $state, '</a></li>
        </ul>
    </div>';
}

function thirdtier($state, $tier3name) {
    echo
    '<div id="breadcrumb">
        <ul>
            <li><a href="../../../index.php">Home</a></li> 
            <li>/</li>
            <li><a href="../../states.php">States</a></li>
            <li>/</li>
            <li><a href="state.php" class="statelink">', $state, '</a></li>
            <li>/</li>
            <li><a href="#" class="current">', $tier3name,'</a></li>
        </ul>
    </div>';
}

function fourthtier($state, $tier3name, $tier3link, $tier4name) {
    echo
    '<div id="breadcrumb">
        <ul>
            <li><a href="../../../index.php">Home</a></li> 
            <li>/</li>
            <li><a href="../../states.php">States</a></li>
            <li>/</li>
            <li><a href="state.php" class="statelink">', $state, '</a></li>
            <li>/</li>
            <li><a href="', $tier3link,'">', $tier3name,'</a></li>
            <li>/</li>
            <li><a href="#" class="current">', $tier4name,'</a></li>
        </ul>
    </div>';
}

?> 