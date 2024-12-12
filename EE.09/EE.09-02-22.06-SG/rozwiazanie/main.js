function generuj() {
    let H = document.getElementById('kolor').value;
    let L = '50%';
    //dla pierwszego wiersza S=100%
    document.getElementById('wiersz1').style.backgroundColor = "hsl(" + H + ", 50%, " + L + ")";
    
    //wiersz2 dla poszczegolnych komorek
    document.getElementById('komorka1').style.backgroundColor = "hsl(" + H + ", 80%, " + L + ")";
    document.getElementById('komorka2').style.backgroundColor = "hsl(" + H + ", 60%, " + L + ")";
    document.getElementById('komorka3').style.backgroundColor = "hsl(" + H + ", 40%, " + L + ")";
    document.getElementById('komorka4').style.backgroundColor = "hsl(" + H + ", 20%, " + L + ")";
}