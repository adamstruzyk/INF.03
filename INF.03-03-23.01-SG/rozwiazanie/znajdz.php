<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css" />
  </head>
  <body>
    <div id="baner">
      <h1>Grupa Polskich Kwiaciarni</h1>
    </div>
    <div id="lewy">
      <h2>Menu</h2>
      <ol>
        <li>
          <a href="index.html">Strona główna</a>
        </li>
        <li>
          <a href="https://www.kwiaty.pl/" target="_blank">Rozpoznaj kwiaty</a>
        </li>
        <li>
          <a href="znajdz.php">Znajdz kwiaciarnię</a>
          <ul>
            <li>W Warszawie</li>
            <li>W Malborku</li>
            <li>W Poznaniu</li>
          </ul>
        </li>
      </ol>
    </div>
    <div id="prawy">
    <h2>Znajdź kwiaciarnię</h2>
        <form method="post">
            Podaj nazwę miasta: <input type="text" name="miasto"> <input type="submit" value="SPRAWDŹ">
        </form>
        <?php
            $conn = mysqli_connect('localhost','root','','kwiaciarnia');
            if(!$conn){
                exit();
            }
            else{
                @$miasto = $_POST['miasto'];
                if(isset($miasto))
                {
                    $zapytanie = "SELECT `nazwa`,`ulica` FROM `kwiaciarnie` WHERE `miasto` LIKE '$miasto';";
                    $wynik = mysqli_query($conn,$zapytanie);
                    $tab = mysqli_fetch_array($wynik);
                    echo "<h3> ".$tab['nazwa'].", ".$tab['ulica']."</h3>";
                }
            }
            mysqli_close($conn);
        ?>
    </div>
    <div id="stopka">
      <p>Stronę opracował: Adam Strużyk 5TI</p>
    </div>
  </body>
</html>


