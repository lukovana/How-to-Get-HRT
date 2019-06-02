var button = document.getElementById("mobiledrop");
var navigation = document.getElementById("mobiledropdown");
var display = document.getElementById("front");
var count = 0;

function dropdown() {
    count += 1;
    display.innerHTML = "This is count ", count;

    if (count % 2 == 0) {
        navigation.style.display = "none;";
        display.style.backgroundColor = "#ff0000;"
    } else {
        navigation.style.display = "block;";
        display.style.backgroundColor = "#00ff00;"
    }
}