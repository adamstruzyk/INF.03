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
            <?php
                //skrypt 2 --------  polaczenie z baza
                $conn = mysqli_connect('localhost', 'root', '', 'biblioteka');
                
                $zapytanie1 = "SELECT `imie`,`nazwisko` FROM `autorzy` ORDER BY `nazwisko` ASC;";
                $wynik = mysqli_query($conn,$zapytanie1);
                $liczba_wierszy = mysqli_num_rows($wynik);
                for($i = 0; $i<$liczba_wierszy;$i++)
                {
                    $tablica = mysqli_fetch_array($wynik);

                    echo "<li>".$tablica['imie']." ".$tablica['nazwisko']."</li>";
                }

                //zamkniecie polaczenia z baza
                mysqli_close($conn);
            ?>
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
            <form method="POST">
                imię: <input type="text" name="imie"> <br>
                nazwisko: <input type="text" name="nazwisko"> <br>
                symbol: <input type="number" name="symbol"> <br>
                <input type="submit" value="DODAJ"> <br>
            </form>
        </div>
        <div id="prawy2">
            <?php
                //skrypt 2 --------  polaczenie z baza
                $conn = mysqli_connect('localhost', 'root', '', 'biblioteka');
                //pobranie danych z formularza
                @$imie = $_POST['imie'];
                @$nazwisko = $_POST['nazwisko'];

                if(isset($imie) && isset($nazwisko))
                {
                    //wyslanie zapytania
                    $zapytanie2 = "INSERT INTO `czytelnicy`(`imie`, `nazwisko`) VALUES ('$imie','$nazwisko');";
                    $wynik = mysqli_query($conn,$zapytanie2);
                    //wypisanie tekstu
                    echo "Czytelnik $imie $nazwisko został(a) dodany do bazy danych";
                }

                //zamkniecie polaczenia z baza
                mysqli_close($conn);
            ?>
        </div>
    <div id="stopka">Projekt strony: Adam Strużyk 5TI</div>

</body>


</html>