<?php 

function search($back) {
    echo
    '<a href="#"><div id="mobiledrop" onclick="dropdown()" ondblclick="dropout()">
        <img src="', $back,'assets/images/hamburger.png" width="25" height="25" alt="hamburger" id="hamburger" />
    </div></a>
    <form>
        <div id="search">
            <input class="searchbox" type="text" placeholder="Search" aria-label="Search">
            <img src="', $back,'assets/images/search.png" width="25"/>
        </div>
    </form>';
    };
?>