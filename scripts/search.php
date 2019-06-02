<?php 

function search($back) {
    echo
    '<form id="searchbar">
        <img src="', $back,'assets/images/search.png" width="25" height="25" id="searchimg"/>
        <input id="searchbox" type="text" placeholder="Search">
    </form>';
    };
?>