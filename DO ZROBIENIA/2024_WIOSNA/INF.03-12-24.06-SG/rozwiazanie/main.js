function obraz1(){
    if (document.getElementById("blur").checked) {
        document.getElementById("pszczola").style.filter = "blur(4px)";
    }
    else if (document.getElementById("sepia").checked)
    {
        document.getElementById("pszczola").style.filter = "sepia(100%)";
    }
    else if (document.getElementById("negatyw").checked) {
        document.getElementById("pszczola").style.filter = "invert(100%)";
    }
}

function obraz2(arg) {
    if (arg == 1) {
        //1 = kolory
        document.getElementById("pomarancza").style.filter = "grayscale(0%)";
    }
    else if (arg == 2) {
        //2 = czarno-bialy
        document.getElementById("pomarancza").style.filter = "grayscale(100%)";
    }
}

function obraz3() {
    let wartosc = document.getElementById("suwak_owoce").value;
    let text = "opacity(" + wartosc + "%)";
    document.getElementById("owoce").style.filter = text;
}

function obraz4() {
    let wartosc = document.getElementById("suwak_zolw").value;
    let text = "brightness(" + wartosc + "%)";
    document.getElementById("zolw").style.filter = text;
}