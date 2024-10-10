<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Motocykle</title>
    <link rel="stylesheet" href="styl.css" />
  </head>
  <div id="tlo">
    <img src="motor.png" alt="motocykl" />
  </div>
  <body>
    <header id="baner">
      <h1>Motocykle - moja pasja</h1>
    </header>
    <main id="lewy">
      <h2>Gdzie pojechać?</h2>
      <dl>
        <?php
          $conn = mysqli_connect('localhost','root','','motory');
          if(!$conn){
            exit();
          }
          else{
            $zapytanie2 = "SELECT wycieczki.nazwa, wycieczki.opis, wycieczki.poczatek, zdjecia.zrodlo FROM `wycieczki` JOIN zdjecia ON wycieczki.zdjecia_id = zdjecia.id;";
            $wynik = mysqli_query($conn,$zapytanie2);
            $text = "";

            while($tablica = mysqli_fetch_array($wynik)){
              $text .= '<dt>'.$tablica['nazwa'].' rozpoczyna się w '.$tablica['poczatek'].' <a href="'.$tablica['zrodlo'].'">zobacz zdjęcie</a></dt>';
              $text .= '<dd>'.$tablica['opis'].'</dd>';
            }
            echo $text;
          }
          mysqli_close($conn);
        ?>
      </dl>
    </main>
    <aside id="prawy1">
      <h2>Co kupić?</h2>
      <ol>
        <li>Honda CBR125R</li>
        <li>Yamaha YBR125</li>
        <li>Honda VFR800i</li>
        <li>Honda CBR1100XX</li>
        <li>BMW R1200GS LC</li>
      </ol>
    </aside>
    <aside id="prawy2">
      <h2>Statystyki</h2>
      <p>Wpisanych wycieczek:
        <?php
            $conn = mysqli_connect('localhost','root','','motory');
            if(!$conn){
              exit();
            }
            else{
              $zapytanie3 = "SELECT COUNT(*) AS `ile` FROM `wycieczki`;";
              $wynik = mysqli_query($conn,$zapytanie3);
              $tablica = mysqli_fetch_array($wynik);
              echo $tablica['ile'];
            }
            mysqli_close($conn);
          ?>
      </p>

      <p>Użytkowników forum: 200</p>
      <p>Przesłanych zdjęć: 1300</p>
    </aside>
    <footer id="stopka">Stronę wykonał: Adam Strużyk 5TI</footer>
  </body>
  
</html>




