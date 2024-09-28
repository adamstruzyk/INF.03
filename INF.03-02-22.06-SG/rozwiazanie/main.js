function oblicz()
{
    let rodzaj = document.getElementById("rodzaj").value;
    let litry = document.getElementById("litry").value;
    let cena = 0;

    if (rodzaj == 1)
    {
        cena += litry * 4;
    }
    else if (rodzaj == 2)
    {
        cena += litry * 3.5;
    }

    document.getElementById("wynik").innerText = "koszt paliwa: " + cena;
}