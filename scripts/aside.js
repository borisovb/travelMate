function openLogin() {
    document.getElementById("asideRegister").style.width = "0";
    document.getElementById("asideLogin").style.width = "300px";
    document.getElementById("main").style.marginRight = "0";
    document.getElementById("main").style.marginRight = "300px";
}
function closeLogin() {
    document.getElementById("asideLogin").style.width = "0";
    document.getElementById("main").style.marginRight = "0";
}
function openRegister() {
    document.getElementById("asideRegister").style.width = "300px";
    document.getElementById("asideLogin").style.width = "0";
    document.getElementById("main").style.marginRight = "0";
    document.getElementById("main").style.marginRight = "300px";
}
function closeRegister() {
    document.getElementById("asideRegister").style.width = "0";
    document.getElementById("main").style.marginRight = "0";
}