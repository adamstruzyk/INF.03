<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sklep dla uczniów</title>
    <link rel="stylesheet" href="styl.css" />
  </head>
  <body>
    <header id="stopka">
      <h1>Dzisiejsze promocje naszego sklepu</h1>
    </header>
    <section id="lewy">
      <h2>Taniej o 30%</h2>
      <ol>
        <?php
          $conn = mysqli_connect('localhost','root','','sklep');
          if(!$conn){
            exit();
          }
          else{
            $zapytanie1 = "SELECT `nazwa` FROM `towary` WHERE `promocja` = 1;";
            $wynik = mysqli_query($conn, $zapytanie1);
            $text = "";

            while($tab = mysqli_fetch_array($wynik)){
              $text .= "<li>$tab[0]</li>";
            }
            echo $text;
          }
          mysqli_close($conn);
        ?>
      </ol>
    </section>
    <section id="srodkowy">
      <h2>Sprawdź cenę</h2>
      <form method="post">
        <select name="towary">
          <option value="Gumka do mazania">Gumka do mazania</option>
          <option value="Cienkopis">Cienkopis</option>
          <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
          <option value="Markery 4 szt.">Markery 4 szt.</option>
        </select>
        <input type="submit" value="SPRAWDŹ" />
        <section id="skrypt2">
          <?php
            $conn = mysqli_connect('localhost','root','','sklep');
            if(!$conn){
              exit();
            }
            else{
              @$towar = $_POST['towary'];
              if(isset($towar)){
                $zapytanie2 = "SELECT `cena` FROM `towary` WHERE `nazwa` LIKE '$towar'";
                $wynik = mysqli_query($conn, $zapytanie2);
                $tab = mysqli_fetch_array($wynik);
                $promocja = $tab['cena'] - ($tab['cena'] * 0.3);
                echo "cena regularna: ".$tab['cena']."<br>";
                echo "cena w promocji 30%: ".$promocja; 
              }

            }
            mysqli_close($conn);
          ?>
        </section>
      </form>
    </section>
    <section id="prawy">
      <h2>Kontakt</h2>
      <p>email: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
      <img src="promocja.png" alt="promocja" />
    </section>
    <footer id="stopka">
      <h4>Autor strony: Adam Strużyk 5TI</h4>
    </footer>
  </body>
</html>

