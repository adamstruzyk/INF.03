function next1() {
    document.getElementById('blok1').style.visibility = "hidden";
    document.getElementById('blok2').style.visibility = "visible";
}
function next2() {
    document.getElementById('blok2').style.visibility = "hidden";
    document.getElementById('blok3').style.visibility = "visible";
}
function wyslij() {
    if (document.getElementById('haslo1').value != document.getElementById('haslo2').value) {
        alert("Podane hasła różnią się");
    }
    console.log("Witaj " + document.getElementById('imie').value + " " + document.getElementById('nazwisko').value);
}