var button = document.getElementById("mobiledrop");
var navigation = document.getElementById("mobiledropdown");
var display = document.getElementById("front");
var count = 0;

function dropdown() {
    count += 1;
    console.log = "This is count ", count;

    if (count % 2 == 0) {
        navigation.style.display = "none;";
    } else {
        navigation.style.display = "block;";
    }
}