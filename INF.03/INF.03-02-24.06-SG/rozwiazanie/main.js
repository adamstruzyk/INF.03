wypowiedzi = ["Świetnie!",
"Kto gra główną rolę?",
"Lubisz filmy Tego reżysera?",
"Będę 10 minut wcześniej",
"Może kupimy sobie popcorn?",
"Ja wolę Colę",
"Zaproszę jeszcze Grześka",
"Tydzień temu też byłem w kinie na Diunie",
"Ja funduję bilety"];

function wyslij() {
    let chat = document.getElementById('blok_chatu');
    let tresc = document.getElementById('wiadomosc').value;

    let wiadomosc = document.createElement("section");
    wiadomosc.classList.add("jolka");
    wiadomosc.innerHTML = "<img src='Jolka.jpg'><p>" + tresc + "</p>";
    chat.appendChild(wiadomosc);
    wiadomosc.scrollIntoView();
}

function losuj() {
    let los = Math.floor(Math.random() * 9);
    let chat = document.getElementById('blok_chatu');
    let tresc = wypowiedzi[los];

    let wiadomosc = document.createElement("section");
    wiadomosc.classList.add("krzysiek");
    wiadomosc.innerHTML = "<img src='Krzysiek.jpg'><p>" + tresc + "</p>";
    chat.appendChild(wiadomosc);
    wiadomosc.scrollIntoView();
}
