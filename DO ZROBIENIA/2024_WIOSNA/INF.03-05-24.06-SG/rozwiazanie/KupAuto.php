<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Komis aut</title>
    <link rel="stylesheet" href="styl.css" />
  </head>
  <body>
    <header id="baner">
      <h1><em>KupAuto!</em> Internetowy Komis Samochodowy</h1>
    </header>
    <section id="glowny1">
    <?php
      $conn = mysqli_connect('localhost','root','','kupauto');
      if(!$conn){
        exit();
      }
      else{
        $zapytanie2 = "SELECT `model`,`rocznik`,`przebieg`,`paliwo`,`cena`,`zdjecie` FROM `samochody` WHERE `id` = 10;";
        $wynik = mysqli_query($conn,$zapytanie2);
        $text = "";
        while($tab = mysqli_fetch_array($wynik)){
          $text .= "<img src='$tab[5]' alt='oferta dnia'>";
          $text .= "<h4>Oferta dnia: Toyota $tab[0]</h4>";
          $text .= "<p>Rocznik: $tab[1], przebieg: $tab[2], rodzaj paliwa: $tab[3]</p>";
          $text .= "<h4>Cena: $tab[4] </h4>";
        }
        echo $text;
      }
      mysqli_close($conn);
    ?>
    </section>
    <section id="glowny2">
      <h2>Oferty wyróżnione</h2>
      <?php
        $conn = mysqli_connect('localhost','root','','kupauto');
        if(!$conn){
          exit();
        }
        else{
          $zapytanie3 = "SELECT marki.nazwa, samochody.model, samochody.rocznik, samochody.cena, samochody.zdjecie FROM `samochody` JOIN marki ON marki.id = samochody.marki_id WHERE samochody.wyrozniony = 1 LIMIT 4;";
          $wynik = mysqli_query($conn,$zapytanie3);
          $text = "";
          while($tab = mysqli_fetch_array($wynik)){
            $text .= "<section class='blok_generowany'>";
            $text .= "<img src='$tab[4]' alt='$tab[1]'>";
            $text .= "<h4>$tab[0] $tab[1]</h4>";
            $text .= "<p>Rocznik: $tab[2]</p>";
            $text .= "<h4>Cena: $tab[3]</h4>";
            $text .= "</section>";
          }
          echo $text;
        }
        mysqli_close($conn);
      ?>
    </section>
    <section id="glowny3">
      <h2>Wybierz markę</h2>
      <form method="post">
        <select name="marka" id="wybierz_marke">
          <?php
            $conn = mysqli_connect('localhost','root','','kupauto');
            if(!$conn){
              exit();
            }
            else{
              $zapytanie1 = "SELECT `nazwa` FROM `marki`;";
              $wynik = mysqli_query($conn,$zapytanie1);
              $text = "";
              while($tab = mysqli_fetch_array($wynik)){
                $text .= "<option value='$tab[0]'>$tab[0]</option>";
              }
              echo $text;
            }
            mysqli_close($conn);
          ?>
        </select>
        <button type='submit'>Wyszukaj</button>
      </form>
      <?php
        $conn = mysqli_connect('localhost','root','','kupauto');
        if(!$conn){
          exit();
        }
        else{
          @$marka = $_POST['marka'];
          if(isset($marka)){
            $zapytanie4 = "SELECT marki.nazwa, samochody.model, samochody.cena, samochody.zdjecie FROM `samochody` JOIN marki ON marki.id = samochody.marki_id WHERE marki.nazwa = '$marka';";
            $wynik = mysqli_query($conn,$zapytanie4);
            $text = "";
            while($tab = mysqli_fetch_array($wynik)){
              $text .= "<section class='blok_generowany'>";
              $text .= "<img src='$tab[3]' alt='$tab[1]'>";
              $text .= "<h4>$tab[0] $tab[1]</h4>";
              $text .= "<h4>Cena: $tab[2]</h4>";
              $text .= "</section>";
            }
            echo $text;
          }
        }
        mysqli_close($conn);
      ?>
    </section>
    <footer id="stopka">
      <p>Stronę wykonał: Adam Strużyk 5TI</p>
      <p>
        <a href="http://firmy.pl/komis">Znajdź nas także</a>
      </p>
    </footer>
  </body>
</html>

