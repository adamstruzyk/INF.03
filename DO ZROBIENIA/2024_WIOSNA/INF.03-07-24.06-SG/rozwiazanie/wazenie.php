<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ważenie samochodów ciężarowych</title>
    <link rel="stylesheet" href="styl.css" />
  </head>
  <body>
    <header id="baner1">
      <h1>Ważenie pojazdów we Wrocławiu</h1>
    </header>
    <header id="baner2">
      <img src="obraz1.png" alt="waga" />
    </header>
    <section id="lewy">
      <h2>Lokalizacje wag</h2>
      <ol>
        <?php
          $conn = mysqli_connect('localhost','root','','wazenietirow');
          if(!$conn){
            exit();
          }
          else{
            $zapytanie1 = "SELECT `ulica` FROM `lokalizacje`;";
            $wynik = mysqli_query($conn,$zapytanie1);
            $text = "";
            while($tablica = mysqli_fetch_array($wynik)){
              $text .= "<li>ulica $tablica[0]</li>";
            }
            echo $text;
          }
          mysqli_close($conn);
        ?>
      </ol>
      <h2>Kontakt</h2>
      <a href="mailto:wazenie@wroclaw.pl">napisz</a>
    </section>
    <section id="srodkowy">
      <h2>Alerty</h2>
      <table>
        <tr>
          <th>rejestracja</th>
          <th>ulica</th>
          <th>waga</th>
          <th>dzień</th>
          <th>czas</th>
        </tr>
        <?php
          $conn = mysqli_connect('localhost','root','','wazenietirow');
          if(!$conn){
            exit();
          }
          else{
            $zapytanie4 = "SELECT wagi.rejestracja, lokalizacje.ulica, wagi.waga, wagi.dzien, wagi.czas FROM `wagi` JOIN lokalizacje ON lokalizacje.id = wagi.lokalizacje_id WHERE `waga` > 5;";
            $wynik = mysqli_query($conn,$zapytanie4);
            $text = "";
            while($tablica = mysqli_fetch_array($wynik)){
              $text .= "<tr>";
              $text .= "<td>$tablica[0]</td><td>$tablica[1]</td><td>$tablica[2]</td><td>$tablica[3]</td><td>$tablica[4]</td>";
              $text .= "</tr>";
            }
            echo $text;
          }
          mysqli_close($conn);
        ?>
      </table>
      <?php
        $conn = mysqli_connect('localhost','root','','wazenietirow');
        if(!$conn){
          exit();
        }
        else{
          $zapytanie3 = "INSERT INTO `wagi`(`lokalizacje_id`, `waga`, `rejestracja`, `dzien`, `czas`) VALUES (5, FLOOR(1 + RAND() * (10 - 1 + 1)), 'DW12345', CURRENT_DATE, CURRENT_TIME);";
          mysqli_query($conn,$zapytanie3);
          header("refresh:10");
        }
        mysqli_close($conn);
      ?>
    </section>
    <section id="prawy">
      <img src="obraz2.jpg" alt="tir" />
    </section>
    <footer id="stopka">
      <p>Stronę wykonał: Adam Strużyk 5TI</p>
    </footer>
  </body>
</html>


