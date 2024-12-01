<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>piłka nożna</title>
    <link rel="stylesheet" href="styl2.css" />
  </head>
  <body>
    <header id="baner">
      <h3>Reprezentacja polski w piłce nożnej</h3>
      <img src="obraz1.jpg" alt="reprezentacja" />
    </header>
    <section id="lewy">
      <form method="post">
        <select name="pozycja">
          <option value="1">Bramkarze</option>
          <option value="2">Obrońcy</option>
          <option value="3">Pomocnicy</option>
          <option value="4">Napastnicy</option>
        </select>
        <input type="submit" value="Zobacz" />
      </form>
      <img src="zad2.png" alt="piłka" />
      <p>Autor: Adam Strużyk 5TI</p>
    </section>
    <section id="prawy">
      <ol>
        <?php
          $conn = mysqli_connect('localhost','root','','egzamin');
          if(!$conn){
            exit();
          }else{
            @$pozycja_id = $_POST['pozycja'];
            if(isset($pozycja_id)){
              $zapytanie1 = "SELECT `imie`,`nazwisko` FROM `zawodnik` WHERE `pozycja_id` = $pozycja_id;";
              $wynik = mysqli_query($conn, $zapytanie1);

              while($row = mysqli_fetch_array($wynik)){
                echo "<li><p>$row[0] $row[1]</p></li>";
              }
            }
          }
          mysqli_close($conn);
        ?>
      </ol>
    </section>
    <section id="glowny">
      <h3>Liga mistrzów</h3>
    </section>
    <section id="liga">
      <!--skrypt 2-->
    </section>
  </body>
</html>
