var count = 0;

function dropdown() {
    const navigation = document.getElementById("mobiledropdown");
    count += 1;
    console.log(count)
    if (count % 2 == 0) {
        console.log("entered % 2")
        navigation.style.display = "none";
    } else {
        console.log("entered else")
        navigation.style.display = "block";
    }
}
/*function dropout() {
    count += 1;
    const navigation = document.getElementById("mobiledropdown");
    navigation.style.display = "none";
}*/