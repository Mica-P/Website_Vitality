var images;
var button;
var index = 0;
var productImage = ['goededoel1', 'goededoel2', 'goededoel3', 'goededoel4'];

var slideShowArray = ['goededoel1.jpg', 'goededoel2.png', 'goededoel3.png', 'goededoel4.jpg'];



window.onload = function () {
    test = document.getElementById("images");
    setInterval(slideShow, 1200);
    test.style.height = "300";

}
function slideShow() {
    test.style.backgroundImage = "url(images/" + slideShowArray[index] + ")";
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