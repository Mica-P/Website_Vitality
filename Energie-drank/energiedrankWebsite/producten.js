var dice; //Hier komt de locatie van de Div dice in te staan
var nummers; //Hier komt de locatie van de Div Nummers in te staan
var rollDice; //Hier komt de locatie van de button rollDice in te staan

var slideShow = ["orange.gif", "lemon-tea.gif", "cherry.gif", "grape.gif"];

var arrayNummers = [''];



window.onload = function () {
    dice = document.querySelector(".dice");
    nummers = document.querySelector(".nummers");
    rollDice = document.querySelector(".rollDice");

    rollDice.onclick = function () {
        randNummer = Math.floor(Math.random() * 5);
        dice.style.backgroundImage = "url(images/" + slideShow[randNummer] + ")";

    }
}

