<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl.css">
  </head>
  <body>
    <header id="baner">
      <h1>Moje Kwiaty</h1>
    </header>
    <main>
      <section id="lewy">
        <h3>Kwiaty dla Ciebie!</h3>
        <a href="https://www.swiatkwiatow.pl/">Rozpoznaj kwiaty</a> <br>
        <a href="znajdz.php">Znajdź kwiaciarnię</a>
        <img src="gozdzik.jpg" alt="Goździk" />
      </section>
      <section id="prawy">
        <img src="gerbera.jpg" alt="Gerbera" />
        <img src="gozdzik.jpg" alt="Goździk" />
        <img src="roza.jpg" alt="Róża" />
        <p>Podaj miejscowość, w której poszukujesz kwiaciarni:</p>
        <form method="post">
            <input type="text" name="miejscowosc"> <button type='submit'>SPRAWDŹ</button>
        </form>
        <?php
            $conn = mysqli_connect('localhost','root','','kwiaciarnia');
            if(!$conn){
                exit();
            }else{
                @$miejscowosc = $_POST['miejscowosc'];
                if(isset($miejscowosc)){
                    $zapytanie1 = "SELECT `nazwa`,`ulica` FROM `kwiaciarnie` WHERE `miasto` like '$miejscowosc';";
                    $wynik = mysqli_query($conn, $zapytanie1);
                    $row = mysqli_fetch_array($wynik);

                    echo "$row[0], $row[1]";
                }
            }
            mysqli_close($conn);
        ?>
      </section>
    </main>
    <footer id="stopka">
      <h3>Stronę opracował: Adam Strużyk 5TI</h3>
    </footer>
  </body>
</html>
