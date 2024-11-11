function zdjecie(arg) {
    switch (arg) {
        case 1:
            document.getElementById("wynik").innerText = "Wybrałeś choinkę. Cena 10 zł";
            break;
        case 2:
            document.getElementById("wynik").innerText = "Wybrałeś mikołaja. Cena 12 zł";
            break;
        case 3:
            document.getElementById("wynik").innerText = "Wybrałeś renifera. Cena 8 zł";
            break;
    }
}