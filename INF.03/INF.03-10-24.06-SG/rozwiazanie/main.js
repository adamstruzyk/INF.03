function zmiana(arg) {
    switch (arg) {
        case 1:
            document.getElementById('cyt1').style.display = "none";
            document.getElementById('cyt2').style.display = "block";
            break;
        case 2:
            document.getElementById('cyt2').style.display = "none";
            document.getElementById('cyt3').style.display = "block";
            break;
        case 3:
            document.getElementById('cyt3').style.display = "none";
            document.getElementById('cyt1').style.display = "block";
            break;
    }
}