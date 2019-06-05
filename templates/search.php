<?php 

function search($back) {
    echo
    '
    <div id="_containerbuttons">
        <div class="_contain" id="_hamburger">
            <a href="#" onclick="dropdown()">
            <img src="', $back3,'assets/images/hamburger.svg" width="20" height="20" alt="hamburger" id="hamburger"/>
            </a>
        </div>
        <form>
            <div id="searchbar">
                <div class="_contain" id="_searchimg">
                    <a href="#"><img src="', $back,'assets/images/search.svg" width="20" height="20" id="searchimg"/></a>
                </div>

                <input id="searchbox" type="text" placeholder="Search">
            </div>
        </form>
    </div>';
    };
?>