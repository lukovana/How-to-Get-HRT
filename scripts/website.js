var add = (function () {
    var counter = 0;
    return function () {
        return counter += 1;
    }
})();

    function dropdown(){
        const navigation = document.getElementByClassName("mobiledropitem");
        const headnav = document.getElementById("h_wrapper");
        add();

        if (add() % 2 == 0) {
            navigation.style.display = "block";
            headnav.style.height = "37vh";
        } else {
            navigation.style.display = "none";
        }

        document.getElementById("front").innerHTML = add();
    }