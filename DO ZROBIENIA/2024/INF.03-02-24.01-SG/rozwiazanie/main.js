function komunikat() {
    let imie = document.getElementById("imie").value;
    let nazwisko = document.getElementById("nazwisko").value;
    let email = document.getElementById("email").value;
    let uslugi = document.getElementById("uslugi").value;

    document.getElementById("wynik").innerHTML = imie + " " + nazwisko + "<br>" + email.toLowerCase() + "<br>" + "Usługa: " + uslugi;
}