function promocja() {
    let krotkie = document.getElementById("1");
    let srednie = document.getElementById("2");
    let poldlugie = document.getElementById("3");
    let dlugie = document.getElementById("4");
    let cena = 0;

    if (krotkie.checked) {
        cena = krotkie.value - 10;
    }
    else if(srednie.checked){
        cena = srednie.value - 10;
    }
    else if(poldlugie.checked){
        cena = poldlugie.value - 10;
    }
    else if(dlugie.checked){
        cena = dlugie.value - 10;
    }

    document.getElementById("wynik").innerText = "cena promocyjna: " + cena;

}