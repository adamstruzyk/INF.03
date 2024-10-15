function aktywuj(arg) {
    document.getElementById('blok1').style.visibility = "hidden";
    document.getElementById('blok2').style.visibility = "hidden";
    document.getElementById('blok3').style.visibility = "hidden";
    switch (arg){
        case 1:
            document.getElementById('blok1').style.visibility = "visible";
            break;
        case 2:
            document.getElementById('blok2').style.visibility = "visible";
            break;
        case 3:
            document.getElementById('blok3').style.visibility = "visible";
            break;
    }
}


function zwiekszPasek() {
}
