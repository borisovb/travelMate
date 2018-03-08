$(function(){
    loadTravelVisas();
});

function loadTravelVisas() {
    $("#infoContent").load("infoContent/travelVisas.html");
    document.getElementById("travelVisasLink").style.textDecoration = "underline";
    document.getElementById("otherLink").style.textDecoration = "none";
    document.getElementById("roadTaxesLink").style.textDecoration = "none";
};

function loadRoadTaxes() {
    $("#infoContent").load("infoContent/roadTaxes.html");
    document.getElementById("travelVisasLink").style.textDecoration = "none";
    document.getElementById("otherLink").style.textDecoration = "none";
    document.getElementById("roadTaxesLink").style.textDecoration = "underline";
};

function loadOther() {
    $("#infoContent").load("infoContent/other.html");
    document.getElementById("travelVisasLink").style.textDecoration = "none";
    document.getElementById("otherLink").style.textDecoration = "underline";
    document.getElementById("roadTaxesLink").style.textDecoration = "none";
};