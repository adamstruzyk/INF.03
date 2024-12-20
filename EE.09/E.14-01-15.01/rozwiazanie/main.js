function dodawanie() {
    let liczba1 = parseInt(document.getElementById("liczba1").value);
    let liczba2 = parseInt(document.getElementById("liczba2").value);
    if (isNaN(liczba1) || isNaN(liczba2)){
        document.getElementById('wynik').innerText = "Proszę uzupełnić obie liczby.";
    }
    else {
        let wynik = liczba1 + liczba2;
        document.getElementById('wynik').innerText = "Wynik działania wynosi: "+wynik;
    }

}
function odejmowanie() {
    let liczba1 = parseInt(document.getElementById("liczba1").value);
    let liczba2 = parseInt(document.getElementById("liczba2").value);
    if (isNaN(liczba1) || isNaN(liczba2)){
        document.getElementById('wynik').innerText = "Proszę uzupełnić obie liczby.";
    }
    else {
        let wynik = liczba1 - liczba2;
        document.getElementById('wynik').innerText = "Wynik działania wynosi: "+wynik;
    }
}
function mnozenie() {
    let liczba1 = parseInt(document.getElementById("liczba1").value);
    let liczba2 = parseInt(document.getElementById("liczba2").value);
    if (isNaN(liczba1) || isNaN(liczba2)){
        document.getElementById('wynik').innerText = "Proszę uzupełnić obie liczby.";
    }
    else {
        let wynik = liczba1 * liczba2;
        document.getElementById('wynik').innerText = "Wynik działania wynosi: "+wynik;
    }
}
function dzielenie() {
    let liczba1 = parseInt(document.getElementById("liczba1").value);
    let liczba2 = parseInt(document.getElementById("liczba2").value);
    if (isNaN(liczba1) || isNaN(liczba2)){
        document.getElementById('wynik').innerText = "Proszę uzupełnić obie liczby.";
    }
    else if (liczba2 == 0) {
        document.getElementById('wynik').innerText = "Nie wolno dzielić przez zero.";
    }
    else {
        let wynik = liczba1 / liczba2;
        document.getElementById('wynik').innerText = "Wynik działania wynosi: "+wynik;
    }
}