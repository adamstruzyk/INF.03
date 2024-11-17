function zamowienie() {
    let numer = parseInt(document.getElementById("numer").value);
    let waga = parseInt(document.getElementById("waga").value);
    let cena = 0;
    switch (numer) {
        case 1:
            cena = 5;
            break;
        case 2:
            cena = 7;
            break;
        case 3:
            cena = 6;
            break;
    }
    let razem = cena * waga;
    document.getElementById("wynik").innerText = "Koszt zamówienia wynosi: " + razem; " zł";
}