<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wycieczki po Europie</title>
    <link rel="stylesheet" href="styl4.css" />
  </head>
  <body>
    <div id="baner">
      <h1>BIURO TURYSTYCZNE</h1>
    </div>
    <div id="dane">
      <h3>Wycieczki, na które są wolne miejsca</h3>
      <ul>
        <?php
          $conn = mysqli_connect('localhost','root','','biuro');
          if (!$conn){
            exit();
          }
          else{
            $zapytanie1 = "SELECT `id`,`dataWyjazdu`,`cel`,`cena` FROM `wycieczki` WHERE `dostepna` = TRUE;";
            $wynik = mysqli_query($conn,$zapytanie1);
            $text = "";
            while($tablica = mysqli_fetch_array($wynik)){
              $text .= '<li>';
              $text .= $tablica['id'].'. dnia '.$tablica['dataWyjazdu'].' jedziemy do '.$tablica['cel'].', cena: '.$tablica['cena'];
              $text .= '</li>';
            }
            echo $text;
          }
          mysqli_close($conn);
        ?>
      </ul>
    </div>
    <div id="lewy">
      <h2>Bestsellery</h2>
      <table>
        <tr>
          <td>Wenecja</td>
          <td>kwiecień</td>
        </tr>
        <tr>
          <td>Londyn</td>
          <td>lipiec</td>
        </tr>
        <tr>
          <td>Rzym</td>
          <td>wrzesień</td>
        </tr>
      </table>
    </div>
    <div id="srodkowy">
      <h2>Nasze zdjęcia</h2>
      <!--skrypt 2-->
    </div>
    <div id="prawy">
      <h2>Skontaktuj się</h2>
      <a href="mailto:turysta@wycieczki.pl">napisz do nas</a>
      <p>telefon: 111222333</p>
    </div>
    <div id="stopka">
      <p>Stronę wykonał: Adam Strużyk</p>
    </div>
  </body>
</html>

