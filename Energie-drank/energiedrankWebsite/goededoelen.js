var images;
var button;
var index = 0;
var productImage = ['goededoel1', 'goededoel2', 'goededoel3', 'goededoel4'];

var slideShowArray = ['goededoel1', 'goededoel2', 'goededoel3', 'goededoel4'];



window.onload = function () {
    test = document.getElementById("images");
    setInterval(slideShow, 1200);

}
function slideShow() {
    test.style.backgroundImage = "url(images/" + slideShowArray[index] + ".jpg)";
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