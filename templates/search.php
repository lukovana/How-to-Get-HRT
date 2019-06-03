<?php 

function search($back) {
    echo
    '<form>
        <div id="searchbar">
            <div class="_contain">
                <a href="#"><img src="', $back,'assets/images/search.svg" width="15" height="15" id="searchimg"/></a>
            </div>

            <input id="searchbox" type="text" placeholder="Search">
        </div>
    </form>';
    };
?>