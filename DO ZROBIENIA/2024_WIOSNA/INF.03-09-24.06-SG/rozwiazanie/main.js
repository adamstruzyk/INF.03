var aktywne_zdj = 1;

function next() {
    aktywne_zdj++;
    if (aktywne_zdj > 7)
    {
        aktywne_zdj = 1;
    }
    document.getElementById('aktywne').src = aktywne_zdj + ".jpg";
}

function prev() {
    aktywne_zdj--;
    if (aktywne_zdj < 1)
    {
        aktywne_zdj = 7;
    }
    document.getElementById('aktywne').src = aktywne_zdj + ".jpg";
}