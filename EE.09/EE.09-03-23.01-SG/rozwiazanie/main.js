function wyswietl(arg) {
    let artykul1 = document.getElementById('artykul1');
    let artykul2 = document.getElementById('artykul2');
    let artykul3 = document.getElementById('artykul3');
    let artykul4 = document.getElementById('artykul4');

    switch (arg) {
        case 1:
            artykul1.style.display = "block";
            artykul2.style.display = "none";
            artykul3.style.display = "none";
            artykul4.style.display = "none";
            break;
        case 2:
            artykul1.style.display = "none";
            artykul2.style.display = "block";
            artykul3.style.display = "none";
            artykul4.style.display = "none";
            break;
        case 3:
            artykul1.style.display = "none";
            artykul2.style.display = "none";
            artykul3.style.display = "block";
            artykul4.style.display = "none";
            break;
        case 4:
            artykul1.style.display = "none";
            artykul2.style.display = "none";
            artykul3.style.display = "none";
            artykul4.style.display = "block";
            break;
    }
}