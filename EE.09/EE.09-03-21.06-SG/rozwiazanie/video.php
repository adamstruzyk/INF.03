<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Video On Demand</title>
    <link rel="stylesheet" href="styl3.css" />
  </head>
  <body>
    <header>
      <section id="banerlewy">
        <h1>Internetowa wypożyczalnia filmów</h1>
      </section>
      <section id="banerprawy">
        <table>
          <tr>
            <td>Kryminał</td>
            <td>Horror</td>
            <td>Przygodowy</td>
          </tr>
          <tr>
            <td>20</td>
            <td>30</td>
            <td>20</td>
          </tr>
        </table>
      </section>
    </header>
    <main>
      <section id="blok_polecamy">
        <h3>Polecamy</h3>
        <?php
          $conn = mysqli_connect('localhost','root','','dane3');
          if(!$conn){
            exit();
          }else{
            $zapytanie1 = "SELECT `id`,`nazwa`,`opis`,`zdjecie` FROM `produkty` WHERE `id` IN (18,22,23,25);";
            $wynik = mysqli_query($conn,$zapytanie1);

            while($row = mysqli_fetch_array($wynik)){
              echo "<section class='film'>";
              echo "<h4>$row[0].$row[1]</h4>";
              echo "<img src='$row[3]' alt='film'>";
              echo "<p>$row[2]</p>";
              echo "</section>";
            }
          }
          mysqli_close($conn);
        ?>
      </section>
      <section id="blok_fantastyczne">
        <h3>Filmy fantastyczne</h3>
        <?php
          $conn = mysqli_connect('localhost','root','','dane3');
          if(!$conn){
            exit();
          }else{
            $zapytanie2 = "SELECT `id`,`nazwa`,`opis`,`zdjecie` FROM `produkty` WHERE `Rodzaje_id` = 12;";
            $wynik = mysqli_query($conn,$zapytanie2);

            while($row = mysqli_fetch_array($wynik)){
              echo "<section class='film'>";
              echo "<h4>$row[0].$row[1]</h4>";
              echo "<img src='$row[3]' alt='film'>";
              echo "<p>$row[2]</p>";
              echo "</section>";
            }
          }
          mysqli_close($conn);
        ?>
      </section>
    </main>
    <footer id="stopka">
      <form method="post">
        Usuń film nr.: <input type="number" name="numer_filmu" />
        <input type="submit" value="Usuń film" />
      </form>
      <?php
        $conn = mysqli_connect('localhost','root','','dane3');
        if(!$conn){
          exit();
        }else{
          @$nr_filmu = $_POST['numer_filmu'];
          if(isset($nr_filmu)){
            $zapytanie4 = "DELETE FROM `produkty` WHERE `id` = '$nr_filmu';";
            $wynik = mysqli_query($conn,$zapytanie4);
          }
        }
        mysqli_close($conn);
      ?>
      Stronę wykonał: <a href="mailto:ja@poczta.com">Adam Strużyk 5TI</a>
    </footer>
  </body>
</html>


