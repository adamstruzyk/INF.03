<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wizytówki</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header id="baner">
        <h1>Wizytówki pracowników</h1>
        <form method="post">
            <input type="number" min="1" max="9" value="1" name="id_pracownika">
            <button type="submit">WYŚWIETL</button>
        </form>
    </header>
    <section id="wizytowki">
    <?php
        $conn = mysqli_connect('localhost','root','','firma');
        if(!$conn){
            exit();
        }
        else{
            $id_prac = 1;
            if(isset($_POST['id_pracownika'])){
                $id_prac = $_POST['id_pracownika'];
            }
            $zapytanie1 = "SELECT id, imie, nazwisko, adres, miasto FROM pracownicy WHERE id = $id_prac;";
            $wynik = mysqli_query($conn,$zapytanie1);
            $tab = mysqli_fetch_array($wynik);

            echo "<section class='blok_wizytowki'>";
            echo '<img src="'.$tab['id'].'.jpg" alt="pracownik">';
            echo "<h2>$tab[1] $tab[2]</h2>";
            echo "<h4>Adres:</h4>";
            echo "<p>$tab[3], $tab[4]</p>";
            echo "</section>";
        }
        mysqli_close($conn);
    ?>
    </section>
    <footer id="stopka1">
        <img src="obraz.jpg" alt="pracownicy firmy">
    </footer>
    <footer id="stopka2">
        <p>Autorem wizytownika jest: 24</p>
        <a href="http://agencjareklamowa543.pl/" target="_blank">Zobacz nasze realizacje</a>
    </footer>
    <footer id="stopka3">
        <p>Osoby proszone o podpisanie dokumentu RODO:</p>
        <ol>
            <?php
                $conn = mysqli_connect('localhost','root','','firma');
                if(!$conn){
                    exit();
                }
                else{
                    $zapytanie2 = "SELECT imie, nazwisko FROM `pracownicy` WHERE `czyRODO` = 0;";
                    $wynik = mysqli_query($conn,$zapytanie2);
                    while($tab = mysqli_fetch_array($wynik)){
                        echo "<li>$tab[0] $tab[1]</li>";
                    }
                }
                mysqli_close($conn);
            ?>
        </ol>
    </footer>
</body>
</html>

