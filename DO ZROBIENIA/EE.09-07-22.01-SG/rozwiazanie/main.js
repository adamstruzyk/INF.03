function zmiana_zdjecia(arg) {
    switch (arg) {
        //zmiany zdjec w bloku glownym
        case 1:
            document.getElementById("aktywne").src = "lanzarotte.jpg"
            break;
        case 2:
            document.getElementById("aktywne").src = "pekin.jpg"            
            break;
        case 3:
            document.getElementById("aktywne").src = "serengeti.jpg"
            break;
        case 4:
            document.getElementById("aktywne").src = "wenecja.jpg"            
            break;
        case 5:
            document.getElementById("aktywne").src = "tajlandia.jpg"            
            break;
        //zmiana ikony serduszka
        case 6:
            let aktualna_ikona = document.getElementById("serce").src;
            if (aktualna_ikona == "icon-off.png") {
                aktualna_ikona = "icon-on.png"
            }
            else {
                aktualna_ikona = "icon-off.png"
            }
            break;
    }
}