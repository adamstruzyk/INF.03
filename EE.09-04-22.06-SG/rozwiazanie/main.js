var id_zamowienia = 0;
zaznaczajaca_braki();

function zamawiajaca(a)
{
    id_zamowienia++;
    let nazwa = "";
    switch (a)
    {
        case 1:
            nazwa = document.getElementById("prod1").innerText;
            break;
        case 2:
            nazwa = document.getElementById("prod2").innerText;
            break;
        case 3:
            nazwa = document.getElementById("prod3").innerText;
            break;     
        case 4:
            nazwa = document.getElementById("prod4").innerText;
            break;      
    }
    let komunikat = "Zamówienie nr: " + id_zamowienia + " Produkt: " + nazwa;
    alert(komunikat);
}


function aktualizuj(a)
{
    let nowa_wartosc = prompt("Podaj nową ilość:")
    switch (a)
    {
        case 1:
            document.getElementById("ilosc_1").innerText = nowa_wartosc;
            break;
        case 2:
            document.getElementById("ilosc_2").innerText = nowa_wartosc;
            break;
        case 3:
            document.getElementById("ilosc_3").innerText = nowa_wartosc;
            break;     
        case 4:
            document.getElementById("ilosc_4").innerText = nowa_wartosc;
            break;      
    }
    zaznaczajaca_braki();
}

function zaznaczajaca_braki()
{
    const ilosc_wierszy = 4;
    for (let i = 1; i <= ilosc_wierszy; i++)
    {
        let id = "ilosc_" + i;
        let aktualny_wiersz = parseInt(document.getElementById(id).innerHTML);

        if (aktualny_wiersz == 0)
        {
            document.getElementById(id).style.backgroundColor = "red";

        }
        else if (aktualny_wiersz >= 1 && aktualny_wiersz <= 5)
        {
            document.getElementById(id).style.backgroundColor = "yellow";
        }
        else
        {
            document.getElementById(id).style.backgroundColor = "Honeydew";
        }
    }
}
