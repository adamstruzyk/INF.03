var aktualne_zdjecie = 1;

function next() {
    if (aktualne_zdjecie == 7) {
        aktualne_zdjecie = 1;
    } else {
        aktualne_zdjecie++;
    }
    document.getElementById("aktywne_zdj").src = aktualne_zdjecie + ".jpg";
}

function prev() {
    if (aktualne_zdjecie == 1) {
        aktualne_zdjecie = 7;
    } else {
        aktualne_zdjecie--;
    }
    document.getElementById("aktywne_zdj").src = aktualne_zdjecie + ".jpg";
}