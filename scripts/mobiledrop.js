var button = document.getElementById("mobiledropdown");
var navigation = document.getElementById("mobiledrop"), count = 0;

button.onclick  = function () {
    count += 1;

    navigation.style.display = "block;";

    if (count % 2 == 0) {
        navigation.style.display = "none;";
    }
}