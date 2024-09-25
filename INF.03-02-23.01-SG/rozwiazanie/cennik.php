<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="styl2.css" />
  </head>
  <body>
    <div id="baner">
      <h1>Pensjonat pod dobrym humorem</h1>
    </div>
    <div id="lewy">
      <a href="index.html">GŁÓWNA</a>
      <img src="1.jpg" alt="pokoje" />
    </div>
    <div id="srodkowy">
        <a href="cennik.php">CENNIK</a>
        <table>
        <!--SKRYPT-->
        <?php
            //polaczenie sie z baza 
            $conn = mysqli_connect('localhost','root','','wynajem');
            if(!$conn)
            {
                exit();
            }
            else
            {
                $zapytanie = 'SELECT * FROM `pokoje`;';
                $wynik = mysqli_query($conn,$zapytanie);
                $text = "";

                while($tabela = mysqli_fetch_array($wynik))
                {
                    $text .= "<tr>";

                    $text .= "<td>";
                    $text .= $tabela['id'];
                    $text .= "</td>";

                    $text .= "<td>";
                    $text .= $tabela['nazwa'];
                    $text .= "</td>";

                    $text .= "<td>";
                    $text .= $tabela['cena'];
                    $text .= "</td>";

                    $text .= "</tr>";

                }
                echo $text;
            }

            mysqli_close($conn);
        ?>
        </table>

    </div>
    <div id="prawy">
      <a href="kalkulator.html">KALKULATOR</a>
      <img src="3.jpg" alt="pokoje" />
    </div>
    <div id="stopka">
      <p>Stronę opracował: Adam Strużyk 5TI</p>
    </div>
  </body>
</html>

