<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Poznaj Europę</title>
    <link rel="stylesheet" href="styl9.css" />
  </head>
  <body>
    <div id="baner">
      <h1>BIURO PODRÓŻY</h1>
    </div>
    <div id="lewy">
      <h2>Promocje</h2>
      <table>
        <tr>
          <td>Warszawa</td>
          <td>od 600 zł</td>
        </tr>
        <tr>
          <td>Wenecja</td>
          <td>od 1200 zł</td>
        </tr>
        <tr>
          <td>Paryż</td>
          <td>od 1200 zł</td>
        </tr>
      </table>
    </div>

    <div id="srodkowy">
      <h2>W tym roku jedziemy do ...</h2>
      <?php
        //polaczenie z baza danych
        $conn = mysqli_connect('localhost','root','','podroze');
        if(!$conn)
        {
          exit();
        }
        else
        {
          $zapytanie = "SELECT `nazwaPliku`, `podpis` FROM `zdjecia` ORDER BY `podpis` ASC;";
          $wynik = mysqli_query($conn,$zapytanie);
          $liczba_wierszy=mysqli_num_rows($wynik);

          for($i = 0; $i<$liczba_wierszy;$i++)
          {
            $tablica = mysqli_fetch_array($wynik);

            echo '<img src="'.$tablica['nazwaPliku'].'" alt = "'.$tablica['podpis'].'" title = "'.$tablica['podpis'].'">';
          }
        }

        //zamkniecie polaczenia z baza
        mysqli_close($conn);
      ?>
    </div>
    <div id="prawy">

      <h2>Kontakt</h2>
      <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
      <p>telefon: 444555666</p>
    </div>
    <div id="dane">
      <h3>W poprzednich latach byliśmy...</h3>
      <ol>
        <?php
          //polaczenie z baza danych
          $conn = mysqli_connect('localhost','root','','podroze');
          if(!$conn)
          {
            exit();
          }
          else
          {
            $zapytanie = "SELECT `cel`,`dataWyjazdu` FROM `wycieczki` WHERE `dostepna` = FALSE;";
            $wynik = mysqli_query($conn,$zapytanie);
            $liczba_wierszy=mysqli_num_rows($wynik);
  
            for($i = 0; $i<$liczba_wierszy;$i++)
            {
              $tablica = mysqli_fetch_array($wynik);

              echo "<li>Dnia ".$tablica['dataWyjazdu']." pojechaliśmy do ".$tablica['cel']."</li>";
            }
          }

          //zamkniecie polaczenia z baza
          mysqli_close($conn);
        ?>
      </ol>
    </div>
    <div id="stopka">
      <p>Stronę wykonał: Adam Strużyk 5TI</p>
    </div>
  </body>
</html>
