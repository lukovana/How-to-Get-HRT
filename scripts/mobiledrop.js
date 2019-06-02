const count = 0;

function dropdown() {
    const navigation = document.getElementById("mobiledropdown");
    count += 1;

    if (count % 2 == 0) {
        navigation.style.display = "none";
    } else {
        navigation.style.display = "block";
    }
}