<?php 

function search($back) {
    echo
    '<div id="mobiledrop">
        <img src="', $back,'assets/images/hamburger.png" width="25" height="25" alt="hamburger" id="hamburger" />
    </div>
    <form>
        <div id="search">
            <input class="searchbox" type="text" placeholder="Search" aria-label="Search">
            <img src="', $back,'assets/images/search.png" width="25"/>
        </div>
    </form>';
    };
?>