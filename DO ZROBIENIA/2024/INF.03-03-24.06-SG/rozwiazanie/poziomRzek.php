<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Poziomy rzek</title>
    <link rel="stylesheet" href="styl.css" />
  </head>
  <body>
    <header id="baner1">
      <img src="obraz1.png" alt="Mapa Polski" />
    </header>
    <header id="baner2">
      <h1>Rzeki w województwie dolnośląskim</h1>
    </header>
    <section id="menu">
      <form method="post">
        <span class="txt"><input type="radio" name="opcje" value="1"/>Wszystkie</span> 
        <span class="txt"><input type="radio" name="opcje" value="2"/>Ponad stan ostrzegawczy</span> 
        <span class="txt"><input type="radio" name="opcje" value="3"/>Ponad stan alarmowy</span> 
        <input type="submit" value="Pokaż" />
      </form>
    </section>
    <section id="lewy">
      <h3>Stany na dzień 2022-05-05</h3>
      <table>
        <tr>
          <th>Wodomierz</th>
          <th>Rzeka</th>
          <th>Ostrzegawczy</th>
          <th>Alarmowy</th>
          <th>Aktualny</th>
        </tr>
        <?php
          $conn = mysqli_connect('localhost','root','','rzeki');
          if(!$conn)
          {
            exit();
          }
          else{

            @$checkbox = $_POST['opcje'];
            if(isset($checkbox)){
              switch($checkbox){
                case 1:
                  //wszystkie dane wodomierzy
                  $zapytanie2 = "SELECT wodowskazy.nazwa, wodowskazy.rzeka, wodowskazy.stanOstrzegawczy, wodowskazy.stanAlarmowy, pomiary.stanWody FROM `wodowskazy` JOIN pomiary ON wodowskazy.id = pomiary.wodowskazy_id WHERE pomiary.dataPomiaru LIKE '2022-05-05';";
                  $wynik = mysqli_query($conn,$zapytanie2);
                  $text = "";
                  while($tab = mysqli_fetch_array($wynik)){
                    $text .= "<tr>";
                    $text .= "<td>$tab[0]</td><td>$tab[1]</td><td>$tab[2]</td><td>$tab[3]</td><td>$tab[4]</td>";
                    $text .= "</tr>";
                  }
                  echo $text;
                  break;
                case 2:
                  //dane wodomierzy z przekroczonym stanem ostrzegawczym
                  $zapytanie3 = "SELECT wodowskazy.nazwa, wodowskazy.rzeka, wodowskazy.stanOstrzegawczy, wodowskazy.stanAlarmowy, pomiary.stanWody FROM `wodowskazy` JOIN pomiary ON pomiary.wodowskazy_id = wodowskazy.id WHERE pomiary.dataPomiaru LIKE '2022-05-05' AND pomiary.stanWody > wodowskazy.stanOstrzegawczy;";
                  $wynik = mysqli_query($conn,$zapytanie3);
                  $text = "";
                  while($tab = mysqli_fetch_array($wynik)){
                    $text .= "<tr>";
                    $text .= "<td>$tab[0]</td><td>$tab[1]</td><td>$tab[2]</td><td>$tab[3]</td><td>$tab[4]</td>";
                    $text .= "</tr>";
                  }
                  echo $text;          
                  break;
                case 3:
                  //dane wodomierzy z przekroczonym stanem alarmowym
                  $zapytanie3_zmodyfikowane = "SELECT wodowskazy.nazwa, wodowskazy.rzeka, wodowskazy.stanOstrzegawczy, wodowskazy.stanAlarmowy, pomiary.stanWody FROM `wodowskazy` JOIN pomiary ON pomiary.wodowskazy_id = wodowskazy.id WHERE pomiary.dataPomiaru LIKE '2022-05-05' AND pomiary.stanWody > wodowskazy.stanAlarmowy;";
                  $wynik = mysqli_query($conn,$zapytanie3_zmodyfikowane);
                  $text = "";
                  while($tab = mysqli_fetch_array($wynik)){
                    $text .= "<tr>";
                    $text .= "<td>$tab[0]</td><td>$tab[1]</td><td>$tab[2]</td><td>$tab[3]</td><td>$tab[4]</td>";
                    $text .= "</tr>";
                  }
                  echo $text;
                  break;
              }
            }
          }
          mysqli_close($conn);
        ?>
      </table>
    </section>
    <section id="prawy">
      <h3>Informacje</h3>
      <ul>
        <li>Brak ostrzeżeń o burzach z gradem</li>
        <li>Smog w mieście Wrocław</li>
        <li>Silny wiatr w Karkonoszach</li>
      </ul>
      <h3>Średnie stany wód</h3>
      <?php
        $conn = mysqli_connect('localhost','root','','rzeki');
        if(!$conn)
        {
          exit();
        }
        else{
          $zapytanie4 = "SELECT `dataPomiaru`, AVG(`stanWody`) FROM `pomiary` GROUP BY `dataPomiaru`;";
          $wynik = mysqli_query($conn,$zapytanie4);
          $text = "";
          while($tab = mysqli_fetch_array($wynik)){
            $text .= "<p>";
            $text .= "$tab[0]: $tab[1]";
            $text .= "</p>";
          }
          echo $text;
        }
        mysqli_close($conn);
      ?>
      <a href="https://komunikaty.pl">Dowiedz się więcej</a>
      <img src="obraz2.jpg" alt="rzeka" />
    </section>
    <footer id="stopka">
      <p>Stronę wykonał: Adam Strużyk 5TI</p>
    </footer>
  </body>
</html>
