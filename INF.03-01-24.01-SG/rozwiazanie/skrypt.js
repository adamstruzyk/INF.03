function klik()
{
    //pobranie danych z formularza
    let imie = document.getElementById("imie").value;
    let nazwisko = document.getElementById("nazwisko").value;
    let email = document.getElementById("email").value;
    let zgloszenie = document.getElementById("zgloszenie").value;
    let zgadzam_sie = document.getElementById("zgadzam_sie").checked;

    if(zgadzam_sie)
    {
        document.getElementById("wynik").innerHTML = 
        imie+" "+nazwisko+" <br>Treść Twojej sprawy: "+zgloszenie;
        document.getElementById("wynik").style.color = "navy";
    }
    else
    {
        document.getElementById("wynik").innerHTML = "Musisz zapoznać się z regulaminem";
        document.getElementById("wynik").style.color = "red";
    }

}