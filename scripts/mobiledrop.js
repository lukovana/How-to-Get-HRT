
/*function dropout() {
    count += 1;
    const navigation = document.getElementById("mobiledropdown");
    navigation.style.display = "none";
}*/

var dropdown = (function () {
    var count = 1;

    if (count % 2 == 0) {
        navigation.style.display = "none";
    } else {
        navigation.style.display = "block";
    }
    document.getElementById("front").innerHTML = count;

    return function () {return count += 1;}
  })();
  