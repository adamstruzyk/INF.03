<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hodowla świnek morskich</title>
    <link rel="stylesheet" href="styl.css" />
  </head>
  <body>
    <header>
      <h1>Hodowla świnek morskich - zamów świnkowe maluszki</h1>
    </header>
    <aside id="prawy">
      <h3>Poznaj wszystkie rasy świnek morskich</h3>
      <ol>
        <?php
          $conn = mysqli_connect('localhost','root','','hodowla');
          if(!$conn)
          {
            exit();
          }
          else{
            $zapytanie4 = "SELECT `rasa` FROM `rasy`;";
            $wynik = mysqli_query($conn,$zapytanie4);
            $text = '';
            while($tablica = mysqli_fetch_array($wynik)){
              $text .= '<li>'.$tablica['rasa'].'</li>';
            }
            echo $text;
          }
          mysqli_close($conn);
        ?>
      </ol>
    </aside>
    <nav>
      <a href="peruwianka.php">Rasa Peruwianka</a>
      <a href="american.php">Rasa American</a>
      <a href="crested.php">Rasa Crested</a>
    </nav>
    <main>
      <img src="crested.jpg" alt="Świnka morska rasy crested" />
      <?php
        $conn = mysqli_connect('localhost','root','','hodowla');
        if(!$conn)
        {
          exit();
        }
        else{
          $zapytanie2 = "SELECT DISTINCT swinki.data_ur, swinki.miot, rasy.rasa FROM `swinki` JOIN rasy ON rasy.id = swinki.rasy_id WHERE rasy.id = 7;";
          $wynik = mysqli_query($conn,$zapytanie2);
          $text = '';
          while($tablica = mysqli_fetch_array($wynik)){
            $text .= '<h2>Rasa: '.$tablica[2].'</h2>';
            $text .= '<p>Data urodzenia: '.$tablica[0].'</p>';
            $text .= '<p>Oznaczenie miotu: '.$tablica[1].'</p>';
          }
          echo $text;
        }
        mysqli_close($conn);
      ?>
      <hr />
      <h2>Świnki w tym miocie</h2>
      <?php
        $conn = mysqli_connect('localhost','root','','hodowla');
        if(!$conn)
        {
          exit();
        }
        else{
          $zapytanie3 = "SELECT `imie`,`cena`,`opis` FROM `swinki` WHERE `rasy_id` = 7;";
          $wynik = mysqli_query($conn,$zapytanie3);
          $text = '';
          while($tablica = mysqli_fetch_array($wynik)){
            $text .= '<h3>'.$tablica[0].' - '.$tablica[1].' zł</h3>';
            $text .= '<p>'.$tablica[2].'</p>';
          }
          echo $text;
        }
        mysqli_close($conn);
      ?>
    </main>
    <footer>
      <p>Stronę wykonał: Adam Strużyk 5TI</p>
    </footer>
  </body>
</html>

