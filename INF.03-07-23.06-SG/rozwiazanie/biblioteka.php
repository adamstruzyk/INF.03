<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Biblioteka</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div id="baner">
      <h1>Biblioteka w Książkowicach Małych</h1>
    </div>
    <div id="lewy">
      <h4>Dodaj czytelnika</h4>
      <form method="post">
        imię: <input type="text" name="imie" /> <br />
        nazwisko: <input type="text" name="nazwisko" /> <br />
        symbol: <input type="number" name="symbol" /> <br />
        <input type="submit" value="AKCEPTUJ" />
      </form>
      <?php
        $conn = mysqli_connect('localhost','root','','biblioteka');
        if(!$conn)
        {
          exit();
        }
        else
        {
          //pobranie danych z formularza
          @$imie = $_POST['imie'];
          @$nazwisko = $_POST['nazwisko'];
          @$symbol = $_POST['symbol'];
          if(isset($imie) && isset($nazwisko) && isset($symbol))
          {
            $zapytanie = "INSERT INTO `czytelnicy`(`imie`, `nazwisko`, `kod`) VALUES ('$imie','$nazwisko','$symbol');";
            $wynik = mysqli_query($conn,$zapytanie);
            echo "Dodano czytelnika $imie $nazwisko";
          }
        }

        mysqli_close($conn);
      ?>
    </div>
    <div id="srodkowy">
      <img src="biblioteka.png" alt="biblioteka" />
      <h6>ul.&nbsp;Czytelników&nbsp;15; Książkowice Małe</h6>
      <a href="mailto:biuro@bib.pl">
        <p>Czy masz jakieś uwagi?</p>
      </a>
    </div>
    <div id="prawy">
      <h4>Nasi czytelnicy:</h4>
      <ol>
        <?php
          $conn = mysqli_connect('localhost','root','','biblioteka');
          if(!$conn)
          {
            exit();
          }
          else
          {
            $zapytanie = "SELECT `imie`,`nazwisko` FROM `czytelnicy` ORDER BY `nazwisko` ASC;";
            $wynik = mysqli_query($conn, $zapytanie);
            $text = "";
            while($tablica = mysqli_fetch_array($wynik))
            {
              $text .= "<li>";
              $text .= $tablica['imie']." ".$tablica['nazwisko'];
              $text .= "</li>";
            }
            echo $text;
          }

          mysqli_close($conn);
        ?>
      </ol>
    </div>
    <div id="stopka">
      <p>Projekt witryny: Adam Strużyk 5TI</p>
    </div>
  </body>




</html>
