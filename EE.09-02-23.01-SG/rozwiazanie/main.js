var aktywne_zdj = 1;

function next() {
    if (aktywne_zdj == 5) {
        aktywne_zdj = 1;
    }
    else {
        aktywne_zdj++;
    }

    switch (aktywne_zdj){
        case 1:
            document.getElementById("aktywne").src = "1.jpg";
            break;
        case 2:
            document.getElementById("aktywne").src = "2.jpg";
            break;
        case 3:
            document.getElementById("aktywne").src = "3.jpg";
            break;
        case 4:
            document.getElementById("aktywne").src = "4.jpg";
            break;
        case 5:
            document.getElementById("aktywne").src = "5.jpg";
            break;
    }
}

function prev() {
    if (aktywne_zdj == 1) {
        aktywne_zdj = 5;
    }
    else {
        aktywne_zdj--;
    }

    switch (aktywne_zdj){
        case 1:
            document.getElementById("aktywne").src = "1.jpg";
            break;
        case 2:
            document.getElementById("aktywne").src = "2.jpg";
            break;
        case 3:
            document.getElementById("aktywne").src = "3.jpg";
            break;
        case 4:
            document.getElementById("aktywne").src = "4.jpg";
            break;
        case 5:
            document.getElementById("aktywne").src = "5.jpg";
            break;
    }
}

function miniatura(nr){
    switch (nr) {
        case 1:
            document.getElementById("aktywne").src = "1.jpg";
            aktywne_zdj = 1;
            break;
        case 2:
            document.getElementById("aktywne").src = "2.jpg";
            aktywne_zdj = 2;
            break;
        case 3:
            document.getElementById("aktywne").src = "3.jpg";
            aktywne_zdj = 3;
            break;
        case 4:
            document.getElementById("aktywne").src = "4.jpg";
            aktywne_zdj = 4;
            break;
        case 5:
            document.getElementById("aktywne").src = "5.jpg";
            aktywne_zdj = 5;
            break;
    }
}