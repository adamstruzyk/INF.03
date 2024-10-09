function dodawanie()
{
    let a = parseInt(document.getElementById("liczba1").value);
    let b = parseInt(document.getElementById("liczba2").value);
    let wynik = a+b;
    document.getElementById("wynik").innerHTML = "Wynik: "+wynik;
}
function odejmowanie()
{
    let a = parseInt(document.getElementById("liczba1").value);
    let b = parseInt(document.getElementById("liczba2").value);
    let wynik = a-b;
    document.getElementById("wynik").innerHTML = "Wynik: "+wynik;
}
function mnozenie()
{
    let a = parseInt(document.getElementById("liczba1").value);
    let b = parseInt(document.getElementById("liczba2").value);
    let wynik = a*b;
    document.getElementById("wynik").innerHTML = "Wynik: "+wynik;
}
function dzielenie()
{
    let a = parseInt(document.getElementById("liczba1").value);
    let b = parseInt(document.getElementById("liczba2").value);
    if (b == 0)
    {
        document.getElementById("wynik").innerHTML = "Nie dziel przez zero!";
    }
    else
    {
        let wynik = parseInt(a/b);
        document.getElementById("wynik").innerHTML = "Wynik: "+wynik;    
    }

}
function potegowanie()
{
    let a = parseInt(document.getElementById("liczba1").value);
    let b = parseInt(document.getElementById("liczba2").value);
    let wynik = parseInt(a ** b);
    document.getElementById("wynik").innerHTML = "Wynik: "+wynik;
}