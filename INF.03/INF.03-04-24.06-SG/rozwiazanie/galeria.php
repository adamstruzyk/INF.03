<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header id="baner">
        <h1>Zdjęcia</h1>
    </header>
    <aside id="lewy">
        <h2>Tematy zdjęć</h2>
        <ol>
            <li>Zwierzęta</li>
            <li>Krajobrazy</li>
            <li>Miasta</li>
            <li>Przyroda</li>
            <li>Samochody</li>
        </ol>
    </aside>
    <main>
        <article id="srodkowy">
        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'galeria');
            if(!$conn){
                exit();
            }else{
                $wynik = mysqli_query($conn, "SELECT zdjecia.plik, zdjecia.tytul, zdjecia.polubienia, autorzy.imie, autorzy.nazwisko FROM `zdjecia` JOIN autorzy ON autorzy.id = zdjecia.autorzy_id ORDER BY autorzy.nazwisko ASC;");

                while($row = mysqli_fetch_array($wynik)){
                    echo "<section class='blok'>";
                    echo "<img src='$row[0]' alt='zdjęcie'>";
                    echo "<h3>$row[1]</h3>";
                    if($row[2] > 40){
                        echo "<p>Autor: $row[3] $row[4]. Wiele osób polubiło ten obraz. <br></p>";
                    }else{
                        echo "<p>Autor: $row[3] $row[4].<br></p>";
                    }
                    echo "<a href='$row[0]' download>Pobierz</a>";
                    echo "</section>";
                }
            }
            mysqli_close($conn);
        ?>
        </article>
    </main>
    <aside id="prawy">
        <h2>Najbardziej lubiane</h2>
        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'galeria');
            if(!$conn){
                exit();
            }else{
                $wynik = mysqli_query($conn, "SELECT `tytul`,`plik` FROM `zdjecia` WHERE `polubienia` >= 100;");

                while($row = mysqli_fetch_array($wynik)){
                    echo "<img src='$row[1]' alt='$row[0]'>";
                }
            }
            mysqli_close($conn);
        ?>
        <strong>Zobacz wszystkie nasze Zdjęcia </strong>
    </aside>
    <footer id="stopka">
        <h5>Stronę wykonał: Adam Strużyk 5TI</h5>
    </footer>
</body>
</html>

