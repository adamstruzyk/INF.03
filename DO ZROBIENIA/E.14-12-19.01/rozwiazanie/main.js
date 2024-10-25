function klikniecie(arg) {
    switch (arg) {
        case 1:
            document.getElementById('1').src = "pies1.jpg";
            document.getElementById('aktywne').src = "pies1.jpg";
            break;
        case 2:
            document.getElementById('2').src = "pies2.jpg";
            document.getElementById('aktywne').src = "pies2.jpg";
            break;
        case 3:
            document.getElementById('3').src = "pies3.jpg";
            document.getElementById('aktywne').src = "pies3.jpg";
            break;
    }
}

function najechanie(arg) {
    switch (arg) {
        case 1:
            document.getElementById('1').src = "pies1-odbicie.jpg";
            break;
        case 2:
            document.getElementById('2').src = "pies2-odbicie.jpg";
            break;
        case 3:
            document.getElementById('3').src = "pies3-odbicie.jpg";
            break;
    }
}

function opuszczenie(arg) {
    switch (arg) {
        case 1:
            document.getElementById('1').src = "pies1.jpg";
            break;
        case 2:
            document.getElementById('2').src = "pies2.jpg";
            break;
        case 3:
            document.getElementById('3').src = "pies3.jpg";
            break;
    }
}