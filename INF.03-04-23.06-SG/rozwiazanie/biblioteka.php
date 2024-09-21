<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka publiczna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="baner">
        <h1>Biblioteka w Książkowicach Wielkich</h1>
    </div>
    <div id="lewy">
        <h3>Polecamy dzieła autorów:</h3>
        <ol>
            <!--skrypt 1-->
        </ol>
    </div>
    <div id="srodkowy">
        <h3>ul. Czytelnicza 25, Książkowice&nbsp;Wielkie</h3> <!--spacja nierozdzielajaca to &nbsp;-->
        <a href="mailto:sekretariat@biblioteka.pl"> <!--odsylacz pocztowy-->
            <p>Napisz do nas</p>
        </a>
        <img src="biblioteka.png" alt="książki">
    </div>

    <div id="prawy1">
            <h3>Dodaj czytelnika</h3>
            <form action="biblioteka.php" method="POST">
                imię: <input type="text" name="imie"> <br>
                nazwisko: <input type="text" name="nazwisko"> <br>
                symbol: <input type="number" name="symbol"> <br>
                <input type="submit" value="DODAJ"> <br>
            </form>
        </div>
        <div id="prawy2">
            <!--skrypt 2-->
            
        </div>
    <div id="stopka">Projekt strony: Adam Strużyk 5TI</div>

</body>
</html>