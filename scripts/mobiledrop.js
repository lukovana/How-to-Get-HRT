function dropdown() {
    const navigation = document.getElementById("mobiledropdown");
    const count = 0;
    count++;

    if (count % 2 == 0) {
        navigation.style.display = "none";
    } else {
        navigation.style.display = "block";
    }
}