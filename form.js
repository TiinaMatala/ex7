/*function showLanguage() {
    var x = document.getElementById("language").value;
    document.getElementById("selected_language").innerHTML = x;
}*/
// console.log("asdasdasd")
// console.log("asd")
// var select = document.getElementById("language");
// var input = document.getElementById("selected_language");
// select.onchange = function showLanguage() {
//     input.value = select.value;
// }

function showLanguage() {
    var select = document.getElementById("language");
    var input = document.getElementById("selected_language");
    input.value = select.value;
}

function showPhone(value) {
    // var value = document.querySelector('input[name="phone"]:checked').value;
    var input = document.getElementById("selected_phone");

    input.value = value;
}