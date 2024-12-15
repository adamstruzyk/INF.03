function zmien(arg) {
    let styl_czcionki = document.getElementById('styl_czcionki').value;
    let rozmiar = document.getElementById('rozmiar').value;
    let styl = "";
    switch (styl_czcionki) {
        case 'prosta':
            styl = 'normal';
            break;
        case 'kursywa':
            styl = 'italic';
            break;
    }

    switch (arg) {
        case 1:
            document.getElementById("wynik").style.color = "red";
            document.getElementById("wynik").style.fontStyle = styl;
            document.getElementById("wynik").style.fontSize = rozmiar+"%";
            break;
        case 2:
            document.getElementById("wynik").style.color = "green";
            document.getElementById("wynik").style.fontStyle = styl;
            document.getElementById("wynik").style.fontSize = rozmiar+"%";
            break;
        case 3:
            document.getElementById("wynik").style.color = "blue";
            document.getElementById("wynik").style.fontStyle = styl;
            document.getElementById("wynik").style.fontSize = rozmiar+"%";
            break;
    }
}