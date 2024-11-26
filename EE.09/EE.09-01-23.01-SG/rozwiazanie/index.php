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
        <?php
          $conn = mysqli_connect('localhost','root','','firma');
          if(!$conn){
            exit();
          }
          else{
            $zapytanie2 = "SELECT COUNT(*) FROM `pracownicy`;";
            $wynik = mysqli_query($conn, $zapytanie2);
            $row = mysqli_fetch_array($wynik);
            echo $row[0];
          }
          mysqli_close($conn);
        ?>
      </p>
    </section>
    <section id="prawy">
      <?php
        $conn = mysqli_connect('localhost','root','','firma');
        if(!$conn){
          exit();
        }
        else{
          $zapytanie3 = "SELECT `id`,`imie`,`nazwisko` FROM `pracownicy` WHERE `id` = 2;";
          $wynik1 = mysqli_query($conn, $zapytanie3);
          $row1 = mysqli_fetch_array($wynik1);
          echo "<img src='$row1[0].jpg' alt='pracownik'>";
          echo "<h2>$row1[1] $row1[2]</h2>";

          $zapytanie4 = "SELECT pracownicy.id, stanowiska.nazwa, stanowiska.opis FROM `pracownicy` JOIN stanowiska ON stanowiska.id = pracownicy.stanowiska_id WHERE pracownicy.id = 2;";
          $wynik2 = mysqli_query($conn, $zapytanie4);
          $row2 = mysqli_fetch_array($wynik2);

          echo "<h4>$row2[1]</h4>";
          echo "<h5>$row2[2]</h5>";
        }
        mysqli_close($conn);
      ?>
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


