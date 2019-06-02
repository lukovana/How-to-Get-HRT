var button = document.getElementById("mobiledrop");
var navigation = document.getElementById("mobiledropdown"), count = 0;

button.onclick  = function () {
    count += 1;

    navigation.style.display = "block;";

    if (count % 2 == 0) {
        navigation.style.display = "none;";
    }
}