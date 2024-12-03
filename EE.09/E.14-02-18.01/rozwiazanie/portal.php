<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ogłoszenia drobne</title>
    <link rel="stylesheet" href="styl2.css" />
  </head>
  <body>
    <header id="baner">
      <h2>Ogłoszenia drobne</h2>
    </header>
    <section id="lewy">
      <h2>Ogłoszeniodawcy</h2>
      <?php
        $conn = mysqli_connect('localhost','root','','ogloszenia');
        $zapytanie1 = "SELECT `id`, `imie`, `nazwisko`, `email` FROM `uzytkownik` WHERE `id` < 4;";
        $wynik1 = mysqli_query($conn, $zapytanie1);

        $text = "";
        while($row = mysqli_fetch_array($wynik1)){
          $text .= "<h3>$row[0] $row[1] $row[2]</h3>";
          $text .= "<p>$row[3]</p>";
          $zapytanie2 = "SELECT `tytul` FROM ogloszenie WHERE uzytkownik_id = $row[0] LIMIT 1;";
          $wynik2 = mysqli_query($conn, $zapytanie2);
          $row2 = mysqli_fetch_array($wynik2);
          $text .= "<p>Ogłoszenie: $row2[0]</p>";
        }
        echo $text;
        mysqli_close($conn);
      ?>
    </section>
    <section id="prawy">
      <h2>Nasze kategorie</h2>
      <ul>
        <li>Książki</li>
        <li>Muzyka</li>
        <li>Multimedia</li>
      </ul>
      <img src="ksiazki.jpg" alt="uwolnij swoją książkę" />
      <table>
        <tr>
          <td>Ile?</td>
          <td>Koszt</td>
          <td>Promocja</td>
        </tr>
        <tr>
          <td>1-40</td>
          <td>1,20 PLN</td>
          <td rowspan="2">
            Subskrybuj newsletter upust 0,30 PLN na ogłoszenie
          </td>
        </tr>
        <tr>
          <td>41 i więcej</td>
          <td>0,70 PLN</td>
        </tr>
      </table>
    </section>
    <section id="stopka">
      Portal ogłoszenia drobne opracował: Adam Strużyk 5TI
    </section>
  </body>
</html>