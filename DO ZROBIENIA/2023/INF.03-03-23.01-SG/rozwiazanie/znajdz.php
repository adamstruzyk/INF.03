<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css" />
</head>

<body>
    <div id="baner">
        <h1>Grupa Polskich Kwiaciarni</h1>
    </div>
    <div id="lewy">
        <h2>Menu</h2>
        <ol>
            <li><a href="index.html">Strona główna</a></li>
            <li>
                <a href="https://www.kwiaty.pl/" target="_blank">Rozpoznaj kwiaty</a>
            </li>
            <li>
                <a href="znajdz.php">Znajdź kwiaciarnię</a>
                <ul>
                    <li>W Warszawie</li>
                    <li>W Malborku</li>
                    <li>W Poznaniu</li>
                </ul>
            </li>
        </ol>
    </div>
    <div id="prawy">
        <h2>Znajdź kwiaciarnię</h2>
        <form action="znajdz.php" method="post">
            Podaj nazwę miasta: <input type="text" name="miasto">
            <input type="submit" value="SPRAWDŹ">
        </form>
    </div>
    <div id="stopka">
        <p>Stronę opracował: Adam Strużyk 5TI</p>
    </div>
</body>

<?php

    $conn = mysqli_connect('localhost','root','','kwiaciarnia');
    if(!$conn)
    {
        exit();
    }
    else
    {
        $nazwa_miasta = $_POST['miasto'];
        $zapytanie = "SELECT `nazwa`,`ulica` FROM `kwiaciarnie` WHERE `miasto` LIKE '$nazwa_miasta';";

        $tablica = mysqli_fetch_array(mysqli_query($conn, $zapytanie));
        echo tablica['miasto'];


    }






?>

</html>