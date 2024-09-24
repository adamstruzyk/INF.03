<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zadania na lipiec</title>
    <link rel="stylesheet" href="styl6.css" />
  </head>
  <body>
    <div id="baner1">
      <img src="logo1.png" alt="lipiec" />
    </div>
    <div id="baner2">
      <h1>TERMINARZ</h1>
      <p>najbliższe zadania:
        <?php
          //polaczenie z baza danych
          $conn = mysqli_connect('localhost','root','','terminarz');
          if(!$conn)
          {
            exit();
          }
          else
          {
            $zapytanie = 'SELECT DISTINCT `wpis` FROM `zadania` WHERE `dataZadania` BETWEEN "2020-07-01" AND "2020-07-07" AND `wpis` NOT LIKE "";';
            $wynik = mysqli_query($conn,$zapytanie);

            while($tablica = mysqli_fetch_array($wynik))
            {
              echo $tablica['wpis']."; ";
            }

          }
          mysqli_close($conn);
        ?>
        </p>
    </div>
    <div id="glowny">
      <?php
        //polaczenie z baza danych
        $conn = mysqli_connect('localhost','root','','terminarz');
        if(!$conn)
        {
          exit();
        }
        else
        {
          $zapytanie = 'SELECT `dataZadania`,`wpis` FROM `zadania` WHERE `dataZadania` LIKE "%-07-%";';
        }
        mysqli_close($conn);
      ?>
    </div>
    <div id="stopka">
      <a href="sierpien.html">Terminarz na sierpień</a>
      <p>Stronę wykonał: Adam Strużyk 5TI</p>
    </div>
  </body>
</html>

