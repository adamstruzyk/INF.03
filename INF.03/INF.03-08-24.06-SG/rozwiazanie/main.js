function zmien(karta) {
    switch (karta) {
        case 1:
            document.getElementById('blok1').style.display = "block";
            document.getElementById('blok2').style.display = "none";
            document.getElementById('blok3').style.display = "none";
            break;
        case 2:
            document.getElementById('blok1').style.display = "none";
            document.getElementById('blok2').style.display = "block";
            document.getElementById('blok3').style.display = "none";
            break;
        case 3:
            document.getElementById('blok1').style.display = "none";
            document.getElementById('blok2').style.display = "none";
            document.getElementById('blok3').style.display = "block";
            break;
    }
}

var postep = 16;
function pasek() {
    if (postep < 100) {
        postep += 12;
    }
    let szerokosc = postep + "%";
    document.getElementById('postep').style.width = szerokosc;
}

function zatwierdz() {
    let imie = document.getElementById('imie').value;
    let nazwisko = document.getElementById('nazwisko').value;
    let rokUr = document.getElementById('rokUr').value;
    let ulica = document.getElementById('ulica').value;
    let numer = document.getElementById('numer').value;
    let miasto = document.getElementById('miasto').value;
    let nrtel = document.getElementById('nrtel').value;
    let rodo = document.getElementById('rodo').checked;
    console.log(imie + ", " + nazwisko + ", " + rokUr + ", " + ulica + ", " + numer + ", " + miasto + ", " + nrtel + ", " + rodo);
}