function oblicz() {
    let km = document.getElementById("km").value;
    let check = document.getElementById("check").checked;
    switch (check) {
        case true:
            document.getElementById("wynik").innerText = "Dowieziemy Twoją pizzę za darmo";
            break;
        default:
            let koszt = km * 2;
            document.getElementById("wynik").innerText = "Dowóz będzie Cię kosztował "+koszt+" złotych";
    }
}