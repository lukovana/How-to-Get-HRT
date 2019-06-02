var add = (function () {
    var counter = 0;
    return function () {
        return counter += 1;
    }
})();

    function dropdown(){
        const navigation = document.getElementById("mobiledropdown");
        add();
        const media = window.matchMedia("(max-width: 540px)")

        if (add() % 2 == 0 && media.matches) {
            navigation.style.display = "block";
        } else if (add() % 2 != 0 && media.matches) {
            navigation.style.display = "none";
        }

    }


/*function dropout() {
    count += 1;
    const navigation = document.getElementById("mobiledropdown");
    navigation.style.display = "none";
}*/