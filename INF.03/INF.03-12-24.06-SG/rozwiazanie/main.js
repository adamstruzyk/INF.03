function transformacja1() {
    let zdj1 = document.getElementById("zdj1");
    if (document.getElementById("blur").checked) {
        zdj1.style.filter = "blur(4px)";
    } else if (document.getElementById("sepia").checked) {
        zdj1.style.filter = "sepia(100%)";
    } else if (document.getElementById("negatyw").checked) {
        zdj1.style.filter = "invert(100%)";
    }
}
function transformacja2(opcja) {
    let zdj2 = document.getElementById("zdj2");
    switch (opcja) {
        case 1:
            zdj2.style.filter = "grayscale(0%)";
            break;
        case 2:
            zdj2.style.filter = "grayscale(100%)";
            break;
    }
}
function transformacja3() {
    let zdj3 = document.getElementById("zdj3");
    let procent = document.getElementById("procent1").value;
    let wartosc = "opacity(" + procent + "%)";
    zdj3.style.filter = wartosc;
}
function transformacja4() {
    let zdj4 = document.getElementById("zdj4");
    let procent = document.getElementById("procent2").value;
    let wartosc = "brightness(" + procent + "%)";
    zdj4.style.filter = wartosc;
}