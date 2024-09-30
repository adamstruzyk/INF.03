function zmien_tlo(a)
{
    switch (a)
    {
        case 1:
            document.getElementById("prawy").style.backgroundColor = "indigo";
            break;
        case 2:
            document.getElementById("prawy").style.backgroundColor = "steelblue";
            break;
        case 3:
            document.getElementById("prawy").style.backgroundColor = "olive";
            break;
    }
}
function kolor_czcionki()
{
    let b = document.getElementById("kolor").value;

    switch (parseInt(b))
    {
        case 1:
            document.getElementById("prawy").style.color = "white";
            break;
        case 2:
            document.getElementById("prawy").style.color = "tan";
            break;
        case 3:
            document.getElementById("prawy").style.color = "bisque";
            break;
        case 4:
            document.getElementById("prawy").style.color = "plum";
            break;
    }
}

function zmien_rozmiar()
{
    let procent = document.getElementById("rozmiar").value;
    document.getElementById("prawy").style.fontSize = procent;
}

function zmien_obramowanie()
{
    let bool = document.getElementById("ramka").checked;
    if (bool == true)
    {
        document.getElementById("zdjecie").style.border = "1px solid white"
    }
    else if (bool == false)
    {
        document.getElementById("zdjecie").style.border = "none";
    }
}

function punktor(c)
{
    switch (c)
    {
        case 1:
            document.getElementById("lista").style.listStyleType = "disc";
            break;
        case 2:
            document.getElementById("lista").style.listStyleType = "square";
            break;
        case 3:
            document.getElementById("lista").style.listStyleType = "circle";
            break;
    }
}