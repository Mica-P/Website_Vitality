var images;
var button;
var index = 0;
var productImage = ['orange', 'lemon-tea', 'cherry', 'grape'];

var slideShowArray = ['orange', 'lemon-tea', 'cherry', 'grape'];



window.onload = function () {
    test = document.getElementById("images");
    setInterval(slideShow, 1200);

}
function slideShow() {
    test.style.backgroundImage = "url(images/" + slideShowArray[index] + ".gif)";
    index++;
    if (index == slideShowArray.length) {
        index = 0;
    }
}

function getArrayForEach() {
    for (var product of productImage) {
        test.innerHTML += product + "<br>";
    }
}