<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sierpniowy kalendarz</title>
    <link rel="stylesheet" href="styl5.css" />
  </head>
  <body>
    <header id="baner1">
      <h1>Organizer: Sierpień</h1>
    </header>
    <header id="baner2">
      <form method="post">
        Zapisz wydarzenie: <input type="text" name="wydarzenie"/>
        <input type="submit" value="OK" />
        <?php
          $conn = mysqli_connect('localhost','root','','kalendarz');
          if(!$conn){
            exit();
          }
          else{
            @$wydarzenie = $_POST['wydarzenie'];
            if(isset($wydarzenie)){
              $zapytanie4 = "UPDATE `zadania` SET `wpis`='$wydarzenie' WHERE `dataZadania` LIKE '2020-08-09';";
              mysqli_query($conn,$zapytanie4);
            }
          }
          mysqli_close($conn);
        ?>
      </form>
    </header>
    <header id="baner3">
      <img src="logo2.png" alt="Sierpień" />
    </header>
    <section id="glowny">
    <?php
      $conn = mysqli_connect('localhost','root','','kalendarz');
      if(!$conn){
        exit();
      }
      else{
        $zapytanie1 = "SELECT `dataZadania`,`wpis` FROM `zadania` WHERE `miesiac` LIKE 'sierpien';";
        $wynik = mysqli_query($conn, $zapytanie1);
        $text = "";
        while($tab = mysqli_fetch_array($wynik)){
          $text .= "<section class='kalendarz'>";
          $text .= "<h5>$tab[0]</h5>";
          $text .= "<p>$tab[1]</p>";
          $text .= "</section>";
        }
        echo $text;
      }
      mysqli_close($conn);
    ?>
    </section>
    <footer id="stopka">
      <p>Stronę wykonał: Adam Strużyk 5TI</p>
    </footer>
  </body>
</html>
