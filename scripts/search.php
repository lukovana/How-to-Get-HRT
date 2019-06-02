<?php 

function search($back) {
    echo
    '<a href="#"><div id="mobiledrop" onclick="dropdown()">
        <img src="', $back,'assets/images/hamburger.png" width="25" height="25" alt="hamburger" id="hamburger" />
    </div></a>
    <form id="searchbar">
        <img src="', $back,'assets/images/search.png" width="25" height="25" id="searchimg"/>
        <input id="searchbox" type="text" placeholder="Search">
    </form>';
    };
?>