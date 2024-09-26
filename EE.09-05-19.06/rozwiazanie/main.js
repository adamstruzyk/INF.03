function oblicz()
{
    let a1 = parseInt(document.getElementById('pierwszy_wyraz').value);
    let r = parseInt(document.getElementById('roznica').value);
    let n = parseInt(document.getElementById('liczba_wyrazow').value);
    let text = "Ciąg arytmetyczny zawiera wyrazy: "+a1+ ", ";
    
    for (let i = 1; i < n; i++)
    {
        a1 += r;
        text += a1 + ", ";
    }

    document.getElementById("wynik").innerHTML = text;
}