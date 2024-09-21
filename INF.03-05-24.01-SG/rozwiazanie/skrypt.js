function oblicz()
{
    let suma = 0;
    if (document.getElementById("p1").checked)
    {
        suma=suma+45;
    }
    if (document.getElementById("p2").checked)
    {
        suma=suma+30;
    }
    if (document.getElementById("p3").checked)
    {
        suma=suma+20;
    }
    if (document.getElementById("p4").checked)
    {
        suma=suma+50;
    }

    document.getElementById("wynik").innerText = "Cena zabiegów: " + suma;
}