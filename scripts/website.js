var add = (function () {
    var counter = 0;
    return function () {
        return counter += 1;
    }
})();

function dropdown(){
    const navigation = document.getElementById("navdropdown");
    const headnav = document.getElementById("h_wrapper");
    add();

    if (add() % 2 == 0) {
        navigation.style.display = "block";
        headnav.style.height = "40vh";
    } else {
        navigation.style.display = "none";
    }
}

function bluebutton(){
    const dropbutton = document.getElementById("dropbutton");
    dropbutton.style.backgroundColor = "#82c6ff;";
    dropbutton.style.color = "#fff;";
}