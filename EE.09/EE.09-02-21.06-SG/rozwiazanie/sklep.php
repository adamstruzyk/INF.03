<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warzywniak</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header id="baner">
        <section id="baner1">
            <h1>Internetowy sklep z eko-warzywami</h1>
        </section>
        <section id="baner2">
            <ol>
                <li>warzywa</li>
                <li>owoce</li>
                <li><a href="https://terapiasokami.pl/" target="_blank">soki</a></li>
            </ol>
        </section>
    </header>
    <main>
        <article id="glowny">
        <?php
            $conn = mysqli_connect('localhost','root','','dane2');
            if(!$conn){
                exit();
            }else{
                $wynik = mysqli_query($conn, "SELECT `nazwa`,`ilosc`,`opis`,`cena`,`zdjecie` FROM `produkty` WHERE `Rodzaje_id` IN(1,2);");
                while($row = mysqli_fetch_array($wynik)){
                    echo "<section class='blok'>";
                    echo "  <img src='$row[4]' alt='warzywniak'>";
                    echo "  <h5>$row[0]</h5>";
                    echo "  <p>opis: $row[2]</p>";
                    echo "  <p>na stanie: $row[1]</p>";
                    echo "  <h2>$row[3] zł</h2>";
                    echo "</section>";
                }
            }
            mysqli_close($conn);
        ?>
        </article>
    </main>
    <footer id="stopka">
        <form method="post">
            <label>Nazwa: <input type="text" name="nazwa"></label> 
            <label>Cena: <input type="text" name="cena"></label>
            <button type="submit">Dodaj produkt</button>
        </form>
        <?php
            $conn = mysqli_connect('localhost','root','','dane2');
            if(!$conn){
                exit();
            }else{
                @$nazwa = $_POST['nazwa'];
                @$cena = $_POST['cena'];
                if(isset($nazwa) && isset($cena)){
                    mysqli_query($conn, "INSERT INTO `produkty`(`Rodzaje_id`, `Producenci_id`, `nazwa`, `ilosc`, `opis`, `cena`, `zdjecie`) VALUES (1,4,'$nazwa',10,NULL,$cena,'owoce.jpg');");
                }
            }
            mysqli_close($conn);
        ?>
        Stronę wykonał: Adam Strużyk 5TI
    </footer>
</body>
</html>

