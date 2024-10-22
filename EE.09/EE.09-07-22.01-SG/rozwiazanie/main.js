let licznik = 0;
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
            
            if (licznik % 2 == 0) {
                document.getElementById("serce").src = "icon-on.png"
            }
            else {
                document.getElementById("serce").src = "icon-off.png"
            }
            licznik++;
            break;
    }
}