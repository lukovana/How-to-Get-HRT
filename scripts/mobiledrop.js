var button = document.getElementById("mobiledrop");
var navigation = document.getElementById("mobiledropdown");
var count = 0;

function dropdown() {
    count += 1;

    navigation.style.display = "block;";

    if (count % 2 == 0) {
        navigation.style.display = "none;";
    }
}