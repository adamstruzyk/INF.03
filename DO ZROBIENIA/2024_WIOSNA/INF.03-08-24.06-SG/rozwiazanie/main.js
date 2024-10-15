function aktywuj(arg) {
    document.getElementById('blok1').style.display = "none";
    document.getElementById('blok2').style.display = "none";
    document.getElementById('blok3').style.display = "none";
    switch (arg){
        case 1:
            document.getElementById('blok1').style.display = "block";
            break;
        case 2:
            document.getElementById('blok2').style.display = "block";
            break;
        case 3:
            document.getElementById('blok3').style.display = "block";
            break;
    }
}

var postep_paska = 4;
function zwiekszPasek() {
    if (postep_paska < 100)
    {
        postep_paska += 12;
        document.getElementById('postep').style.width = postep_paska + "%";
    }
}

function zatwierdz() {
    let imie = document.getElementById('imie').value;
    let nazwisko = document.getElementById('nazwisko').value;
    let data_ur = document.getElementById('data_ur').value;
    let ulica = document.getElementById('ulica').value;
    let numer = document.getElementById('numer').value;
    let miasto = document.getElementById('miasto').value;
    let nrtel = document.getElementById('nrtel').value;
    let rodo = document.getElementById('rodo').checked;
    console.log(imie+', '+nazwisko+', '+data_ur+', '+ulica+', '+numer+', '+miasto+', '+nrtel+', '+rodo);
}