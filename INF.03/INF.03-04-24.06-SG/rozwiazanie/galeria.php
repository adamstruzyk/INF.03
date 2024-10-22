<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galeria</title>
    <link rel="stylesheet" href="styl.css" />
  </head>
  <body>
    <header id="baner">
      <h1>Zdjęcia</h1>
    </header>
    <section id="lewy">
      <h2>Tematy zdjęć</h2>
      <ol>
        <li>Zwierzęta</li>
        <li>Krajobrazy</li>
        <li>Miasta</li>
        <li>Przyroda</li>
        <li>Samochody</li>
      </ol>
    </section>
    <section id="srodkowy">
      <?php
        $conn = mysqli_connect('localhost','root','','galeria');
        if(!$conn){
          exit();
        }
        else{
          $zapytanie2 = "SELECT zdjecia.plik, zdjecia.tytul, zdjecia.polubienia, autorzy.imie, autorzy.nazwisko FROM `zdjecia` JOIN autorzy ON autorzy.id = zdjecia.autorzy_id ORDER BY autorzy.nazwisko ASC;";
          $wynik = mysqli_query($conn,$zapytanie2);
          $text = '';
          while($tab = mysqli_fetch_array($wynik)){
            $text .= '<section class="zdjecia"">';
            $text .= '<img src="'.$tab['plik'].'" alt="zdjęcie">';
            $text .= '<h3>'.$tab['tytul'].'</h3>';
            if($tab['polubienia']>40){
              $text .= '<p>Autor: '.$tab['imie'].' '.$tab['nazwisko'].'.<br> Wiele osób polubiło ten obraz</p>';
            }
            else{
              $text .= '<p>Autor: '.$tab['imie'].' '.$tab['nazwisko'].'</p>';
            }
            $text .= '<a href="'.$tab['plik'].'" download>Pobierz</a>';
            $text .= '</section>';
          }

          echo $text;
        }
        mysqli_close($conn);
      ?>
    </section>
    <section id="prawy">
      <h2>Najbardziej lubiane</h2>
      <?php
        $conn = mysqli_connect('localhost','root','','galeria');
        if(!$conn){
          exit();
        }
        else{
          $zapytanie1 = "SELECT `tytul`,`plik` FROM `zdjecia` WHERE `polubienia` >= 100;";
          $wynik = mysqli_query($conn,$zapytanie1);
          $text = '';
          while($tab = mysqli_fetch_array($wynik)){
            $text .= '<img src="'.$tab['plik'].'" alt="'.$tab['tytul'].'">';
          }
          echo $text;
        }
        mysqli_close($conn);
      ?>
      <strong>Zobacz wszystkie nasze zdjęcia</strong>
    </section>
    <footer id="stopka">
      <h5>Stronę wykonał: Adam Strużyk 5TI</h5>
    </footer>
  </body>
</html>


