<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Warzywniak</title>
    <link rel="stylesheet" href="styl2.css" />
  </head>
  <body>
    <div id="baner1">
      <h1>Internetowy sklep z eko-warzywami</h1>
    </div>
    <div id="baner2">
      <ol>
        <li>Warzywa</li>
        <li>Owoce</li>
        <li>
          <a href="https://terapiasokami.pl/" target="_blank">Soki</a>
        </li>
      </ol>
    </div>
    <div id="glowny">
      <!--bloki generowany przez skrypt-->
      <?php
        $conn = mysqli_connect('localhost','root','','dane2');
        if(!$conn){
          exit();
        }
        else{
          $zapytanie = "SELECT `nazwa`,`ilosc`,`opis`,`cena`,`zdjecie` FROM `produkty` WHERE `Rodzaje_id` = 1 OR `Rodzaje_id` = 2;";
          $wynik = mysqli_query($conn,$zapytanie);
          $text = "";
          while($tablica = mysqli_fetch_array($wynik)){
            $text .= '<div class="blok">';
            $text .= '<img src="'.$tablica['zdjecie'].'" alt="warzywniak">';
            $text .= '<h5>'.$tablica['nazwa'].'</h5>';
            $text .= '<p>opis: '.$tablica['opis'].'</p>';
            $text .= '<p>na stanie: '.$tablica['ilosc'].'</p>';
            $text .= '<h2>'.$tablica['cena'].' zł</h2>';
            $text .= '</div>';
          }
          echo $text;
        }
        mysqli_close($conn);
      ?>
    </div>
    <div id="stopka">
      <form method="post">
        Nazwa: <input type="text" name="nazwa" /> 
        Cena: <input type="text" name="cena" /> 
        <input type="submit" value="Dodaj produkt" />
      </form>
      <p>Stronę wykonał: Adam Strużyk</p>
    </div>
  </body>

</html>


