<?php 

function search($back) {
    echo
    '<form>
        <div id="searchbar">
            <div class="_contain" id="_searchimg">
                <a href="#"><img src="', $back,'assets/images/search.svg" width="20" height="20" id="searchimg"/></a>
            </div>

            <input id="searchbox" type="text" placeholder="Search">
        </div>
    </form>';
    };
?>