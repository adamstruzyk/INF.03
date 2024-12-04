<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dane o zwierzętach</title>
    <link rel="stylesheet" href="styl3.css" />
  </head>
  <body>
    <header id="baner">
      <h1>ATLAS ZWIERZĄT</h1>
    </header>
    <section id="formularz">
      <h2>Gromady</h2>
      <ol>
        <li>Ryby</li>
        <li>Płazy</li>
        <li>Gady</li>
        <li>Ptaki</li>
        <li>Ssaki</li>
      </ol>
      <form method="post">
        Wybierz gromadę: <input type="number" name="gromady" />
        <button type="submit">Wyświetl</button>
      </form>
    </section>
    <section id="lewy">
      <img src="zwierzeta.jpg" alt="dzikie zwierzęta" />
    </section>
    <section id="srodkowy">
    <?php
      $conn = mysqli_connect('localhost','root','','baza');
      if(!$conn){
        exit();
      }else{
        @$gromady = $_POST['gromady'];
        if(isset($gromady)){
          switch($gromady){
            case 1:
              echo "<h2>RYBY</h2>";
              break;
            case 2:
              echo "<h2>PŁAZY</h2>";
              break;
            case 3:
              echo "<h2>GADY</h2>";
              break;
            case 4:
              echo "<h2>PTAKI</h2>";
              break;
            case 5:
              echo "<h2>SSAKI</h2>";
              break;                  
          }
          $zapytanie1 = "SELECT gatunek, wystepowanie FROM zwierzeta WHERE Gromady_id = '$gromady';";
          $wynik = mysqli_query($conn, $zapytanie1);

          while($row = mysqli_fetch_array($wynik)){
            echo "$row[0], $row[1] <br>";
          }
        }
      }
      mysqli_close($conn);
    ?>
    </section>
    <section id="prawy">
      <h2>Wszystkie zwierzęta w bazie</h2>
      <?php
        $conn = mysqli_connect('localhost','root','','baza');
        if(!$conn){
          exit();
        }else{
          $zapytanie2 = "SELECT zwierzeta.id, zwierzeta.gatunek, gromady.nazwa FROM `zwierzeta` JOIN gromady ON gromady.id = zwierzeta.Gromady_id;";
          $wynik = mysqli_query($conn, $zapytanie2);

          while($row = mysqli_fetch_array($wynik)){
            echo "$row[0]. $row[1], $row[2] <br>";
          }
        }
        mysqli_close($conn);
      ?>
    </section>
    <footer id="stopka">
      <a href="atlas-zwierzat.pl" target="_blank"
        >Poznaj inne strony o zwierzętach</a
      >, autor Atlasu zwierząt: Adam Strużyk 5TI
    </footer>
  </body>
</html>
