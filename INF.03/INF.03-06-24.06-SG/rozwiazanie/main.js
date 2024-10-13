function blok1() {
    document.getElementById("form2").style.visibility = "visible";
    document.getElementById("form1").style.visibility = "hidden";
}

function blok2() {
    document.getElementById("form2").style.visibility = "hidden";
    document.getElementById("form3").style.visibility = "visible";
}

function blok3() {
    let haslo = document.getElementById("haslo").value;
    let haslo_powtorzone = document.getElementById("haslo_powtorzone").value;
    if (haslo != haslo_powtorzone) {
        alert("Podane hasła różnią się");
    }
    let imie = document.getElementById("imie").value;
    let nazwisko = document.getElementById("nazwisko").value;
    console.log("Witaj "+imie+" "+nazwisko);
}