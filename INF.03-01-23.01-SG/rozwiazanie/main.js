/*
    1 puszka = 1 litr farby
    1 litr farby = 4 metry^2
*/

function oblicz() {
    let metry = document.getElementById("metry").value;
    let ile_puszek = Math.ceil(metry / 4);
    document.getElementById("wynik").innerHTML = "Liczba potrzebnych puszek: " + ile_puszek;  
}