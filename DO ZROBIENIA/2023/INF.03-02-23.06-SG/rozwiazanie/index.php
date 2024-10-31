<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css" />
  </head>
  <body>
    <header id="baner">
      <h1>Hurtownia z najlepszymi cenami</h1>
    </header>
    <section id="lewy">
      <h2>Nasze ceny</h2>
      <table>
        <?php
          $conn = mysqli_connect('localhost', 'root', '', 'sklep');
          if(!$conn){
            exit();
          }
          else{
            $zapytanie1 = "SELECT `nazwa`,`cena` FROM `towary` LIMIT 4;";
            $wynik = mysqli_query($conn, $zapytanie1);
            while($tab = mysqli_fetch_array($wynik)){
              echo "<tr>";
              echo "<td>$tab[0]</td><td>$tab[1]</td>";
              echo "</tr>";
            }
          }
          mysqli_close($conn);
        ?>
      </table>
    </section>
    <section id="srodkowy">
      <h2>Koszt zakupów</h2>
      <form method="post">
        wybierz artykuł:
        <select name="artykuly">
          <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
          <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
          <option value="Cyrkiel">Cyrkiel</option>
          <option value="Linijka 30 cm">Linijka 30 cm</option>
        </select>
        <br />
        liczba sztuk: <input type="number" name="sztuki" /><br>
        <button type=submit>OBLICZ</button>
      </form>

      <!--skrypt2-->
    </section>
    <section id="prawy">
      <h2>Kontakt</h2>
      <img src="zakupy.png" alt="hurtownia" />
      <p>email: <a href="mailto:hurt@poczta2.pl">hurt@poczta2.pl</a></p>
    </section>
    <footer id="stopka">
      <h4>Witrynę wykonał: Adam Strużyk 5TI</h4>
    </footer>
  </body>
</html>

<?php
  $conn = mysqli_connect('localhost', 'root', '', 'sklep');
  if(!$conn){
    exit();
  }
  else{
    $zapytanie1 = "SELECT `nazwa`,`cena` FROM `towary` LIMIT 4;";
    $wynik = mysqli_query($conn, $zapytanie1);
    while($tab = mysqli_fetch_array($wynik)){
      echo "<tr>";
      echo "<td>$tab[0]</td><td>$tab[1]</td>";
      echo "</tr>";
    }
  }
  mysqli_close($conn);
?>
<?php
  $conn = mysqli_connect('localhost', 'root', '', 'sklep');
  if(!$conn){
    exit();
  }
  else{
    $zapytanie1 = "SELECT `nazwa`,`cena` FROM `towary` LIMIT 4;";
    $wynik = mysqli_query($conn, $zapytanie1);
    while($tab = mysqli_fetch_array($wynik)){
      echo "<tr>";
      echo "<td>$tab[0]</td><td>$tab[1]</td>";
      echo "</tr>";
    }
  }
  mysqli_close($conn);
?>