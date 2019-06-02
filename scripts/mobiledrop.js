var add = (function () {
    var counter = 0;
    return function () {
        return counter += 1;
    }
})();

    function dropdown(){
        const navigation = document.getElementById("mobiledropdown");
        add();

        if (add() % 2 == 0) {
            navigation.style.display = "none";
        } else {
            navigation.style.display = "block";
        }

        document.getElementById("front").innerHTML = add();
    }

/*function dropout() {
    count += 1;
    const navigation = document.getElementById("mobiledropdown");
    navigation.style.display = "none";
}*/