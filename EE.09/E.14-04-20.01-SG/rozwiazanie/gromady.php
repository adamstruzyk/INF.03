<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gromady kręgowców</title>
    <link rel="stylesheet" href="style12.css" />
  </head>
  <body>
    <header>
      <nav>
        <a href="gromada-ryby.html">gromada ryb</a>
        <a href="gromada-ptaki.html">gromada ptaków</a>
        <a href="gromada-ssaki.html">gromada ssaków</a>
      </nav>
      <section id="logo">
        <h2>GROMADY KRĘGOWCÓW</h2>
      </section>
    </header>
    <main>
      <section id="lewy">
      <?php
        $conn = mysqli_connect('localhost','root','','baza');
        if(!$conn){
          exit();
        }else{
          $wynik = mysqli_query($conn, "SELECT `id`,`Gromady_id`,`gatunek`,`wystepowanie` FROM `zwierzeta` WHERE `Gromady_id` = 4 OR `Gromady_id` = 5;");
          
          while($row = mysqli_fetch_array($wynik)){
            echo "<p>$row[0]. $row[2]</p>"; 
            echo "<p>Występowanie: $row[3], gromada ";
            if($row[1] == 4){
              echo "ptaki</p>";
            }else{
              echo "ssaki</p>";
            }
            echo "<hr>";
          }
        }
        mysqli_close($conn);
      ?>
      </section>
      <section id="prawy">
        <h1>PTAKI</h1>
        <ol>
          <!--skrypt 2-->
          skrypt 2
        </ol>
        <img src="sroka.jpg" alt="Sroka zwyczajna, gromada ptaki" />
      </section>
    </main>
    <footer>Stronę o kręgowcach przygotował: Adam Strużyk 5TI</footer>
  </body>
</html>
