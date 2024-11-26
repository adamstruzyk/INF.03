<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sekretariat</title>
    <link rel="stylesheet" href="styl.css" />
  </head>
  <body>
    <section id="lewy">
      <h1>Akta Pracownicze</h1>
      <?php
        $conn = mysqli_connect('localhost','root','','firma');
        if(!$conn){
          exit();
        }
        else{
          $zapytanie1 = "SELECT `imie`,`nazwisko`,`adres`,`miasto`,`czyRODO`,`czyBadania` FROM `pracownicy` WHERE `id` = 2;";
          $wynik = mysqli_query($conn, $zapytanie1);
          $row = mysqli_fetch_array($wynik);

          echo "<h3>dane</h3>";
          echo "<p>$row[0] $row[1]</p>";
          echo "<hr>";
          echo "<h3>adres</h3>";
          echo "<p>$row[2]</p>";
          echo "<p>$row[3]</p>";
          echo "<hr>";
          echo "<p>RODO: ";
          if($row[4] == 1){
            echo "podpisano</p>";
          }else{
            echo "niepodpisano</p>";
          }
          echo "<p>Badania: ";
          if($row[4] == 1){
            echo "aktualne</p>";
          }else{
            echo "nieaktualne</p>";
          }
        }
        mysqli_close($conn);
      ?>
      <hr />
      <h3>Dokumenty pracownika</h3>
      <a href="cv.txt" download>Pobierz</a>
      <h1>Liczba zatrudnionych pracowników</h1>
      <p>
        <!--skrypt 2-->
      </p>
    </section>
    <section id="prawy">
      <!--skrypt 3-->
    </section>
    <footer id="stopka">
      Autorem aplikacji jest: Adam Strużyk 5TI
      <ul>
        <li>skontaktuj się</li>
        <li>poznaj naszą firmę</li>
      </ul>
    </footer>
  </body>
</html>
