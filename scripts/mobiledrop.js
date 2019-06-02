function dropdown(){
    var navigation = document.getElementById("mobiledropdown");
    var count = 1;

    if (count % 2 == 0) {
        navigation.style.display = "none";
    } else {
        navigation.style.display = "block";
    }

    return function () {return count += 1;}
}

/*function dropout() {
    count += 1;
    const navigation = document.getElementById("mobiledropdown");
    navigation.style.display = "none";
}*/