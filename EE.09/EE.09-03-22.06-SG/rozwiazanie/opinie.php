<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Opinie klientów</title>
    <link rel="stylesheet" href="styl3.css" />
  </head>
  <body>
    <header id="baner">
      <h1>Hurtownia spożywcza</h1>
    </header>
    <main id="glowny">
      <h2>Opinie naszych klientów</h2>
      <?php
        $conn = mysqli_connect('localhost','root','','hurtownia');
        if(!$conn){
          exit();
        }else{
          $zapytanie3 = "SELECT klienci.zdjecie, klienci.imie, opinie.opinia FROM `klienci` JOIN opinie ON opinie.Klienci_id = klienci.id WHERE klienci.Typy_id IN(2,3);";
          $wynik = mysqli_query($conn, $zapytanie3);

          while($row = mysqli_fetch_array($wynik)){
            echo "<section class='opinie'>";
            echo "<img src='$row[0]' alt='klient'>";
            echo "<blockquote>$row[2]</blockquote>";
            echo "<h4>$row[1]</h4>";
            echo "</section>";
          }
        }
        mysqli_close($conn);
      ?>
    </main>
    <footer id="stopka1">
      <h3>Współpracują z nami</h3>
      <a href="http://sklep.pl/">Sklep 1</a>
    </footer>
    <footer id="stopka2">
      <h3>Nasi top klienci</h3>
      <ol>
        <!--skrypt 2-->
      </ol>
    </footer>
    <footer id="stopka3">
      <h3>Skontaktuj się</h3>
      <p>telefon: 111222333</p>
    </footer>
    <footer id="stopka4">
      <h3>Autor: Adam Strużyk 5TI</h3>
    </footer>
  </body>
</html>


<?php
  $conn = mysqli_connect('localhost','root','','hurtownia');
  if(!$conn){
    exit();
  }else{
    $zapytanie1 = "SELECT `imie`,`nazwisko`,`punkty` FROM `klienci` ORDER BY `punkty` DESC LIMIT 3;";
    $wynik = mysqli_query($conn, $zapytanie3);

    while($row = mysqli_fetch_array($wynik)){

    }
  }
  mysqli_close($conn);
?>