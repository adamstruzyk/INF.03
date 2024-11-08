<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Port Lotniczy</title>
    <link rel="stylesheet" href="styl5.css" />
  </head>
  <body>
    <header id="baner1">
      <img src="zad5.png" alt="logo lotnisko" />
    </header>
    <header id="baner2">
      <h1>Przyloty</h1>
    </header>
    <header id="baner3">
      <h3>przydatne linki</h3>
      <a href="kwerendy.txt" target="_blank">Pobierz...</a>
    </header>
    <section id="glowny">
      <table>
        <tr>
          <th>czas</th>
          <th>kierunek</th>
          <th>numer rejsu</th>
          <th>status</th>
        </tr>
        <!--skrypt 1-->
      </table>
    </section>
    <footer id="stopka1">
      tutaj bedzie skrypt2
      <!--skrypt 2-->
    </footer>
    <footer id="stopka2">Autor: Adam Strużyk 5TI</footer>
  </body>
</html>
<?php
  $conn = mysqli_connect('localhost','root','','egzamin');
  if(!$conn){
    exit();
  }
  else{
    $zapytanie = "SELECT `czas`,`kierunek`,`nr_rejsu`,`status_lotu` FROM `przyloty` ORDER BY `czas` ASC;";
    $wynik = mysqli_query($conn, $zapytanie);
    $text = '';
    while($tab = mysqli_fetch_array($wynik)){
      $text .= "<tr>";
      $text .= "<td>$tab[0]</td>";
      $text .= "<td>$tab[1]</td>";
      $text .= "<td>$tab[2]</td>";
      $text .= "<td>$tab[3]</td>";
      $text .= "</tr>";
    }
    echo $text;
  }
  mysqli_close($conn);
?>