let wypowiedzi_krzysztofa = [
    "Świetnie!",
    "Kto gra główną rolę?",
    "Lubisz filmy Tego reżysera?",
    "Będę 10 minut wcześniej",
    "Może kupimy sobie popcorn?",
    "Ja wolę Colę",
    "Zaproszę jeszcze Grześka",
    "Tydzień temu też byłem w kinie na Diunie",
    "Ja funduję bilety"];


function wyslij() {
    let wiadomosc = document.getElementById("wiadomosc").value;
    let zawartosc_chatu = document.getElementById("chat").innerHTML;
    let wypowiedz_jolanty = '<div class="jolka"><img src="Jolka.jpg" /><p>' + wiadomosc + '</p></div>';
    zawartosc_chatu = zawartosc_chatu + wypowiedz_jolanty;
    document.getElementById("chat").innerHTML = zawartosc_chatu;
    //aktualna pozycja scrolla wzgledem góry (zwraca zero pikseli na samej gorze) = maksymalna wysokosc scrolla (zwraca max liczbe pikseli)
    document.getElementById("chat").scrollTop = document.getElementById("chat").scrollHeight;
}

function los() {
    let losowa = Math.floor(Math.random() * 9);
    let wiadomosc = wypowiedzi_krzysztofa[losowa];
    let zawartosc_chatu = document.getElementById("chat").innerHTML;
    let wypowiedz_krzysztofa = '<div class="krzysztof"><img src="Krzysiek.jpg" /><p>' + wiadomosc + '</p></div>';
    zawartosc_chatu = zawartosc_chatu + wypowiedz_krzysztofa;
    document.getElementById("chat").innerHTML = zawartosc_chatu;
    document.getElementById("chat").scrollTop = document.getElementById("chat").scrollHeight;
}