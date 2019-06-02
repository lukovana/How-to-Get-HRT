var add = (function () {
    var counter = 0;
    return function () {
        return counter += 1;
    }
})();

    function dropdown(){
        var navigation = document.getElementById("mobiledropdown");
        var count = add();

        if (count % 2 == 0) {
            navigation.style.display = "none";
        } else {
            navigation.style.display = "block";
        }

    }

/*function dropout() {
    count += 1;
    const navigation = document.getElementById("mobiledropdown");
    navigation.style.display = "none";
}*/