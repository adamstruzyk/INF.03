function kolor() {
    let ksztalt = document.getElementById("ksztalt").value;
    alert(ksztalt);
    let komunikat = "Twoje zamówienie to cukierek ";
    
    if (ksztalt == 1) {
        komunikat += "cytryna";
    }
    else if (ksztalt == 2) {
        komunikat += "liść";
    }
    else if (ksztalt == 3) {
        komunikat += "banan";
    }
    else {
        komunikat += "inny";
    }
    document.getElementById("wynik").innerText = komunikat;

    let r = document.getElementById("r").value;
    let g = document.getElementById("g").value;
    let b = document.getElementById("b").value;
    let kolor_rgb = "rgb("+ r + "," + g + "," + b + ")";
    document.getElementById("przycisk_kolor").style.backgroundColor = kolor_rgb;
}