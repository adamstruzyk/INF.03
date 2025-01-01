<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Poziomy Rzek</title>
    <link rel="stylesheet" href="styl.css" />
  </head>
  <body>
    <header id="baner">
      <section id="baner1">
        <img src="obraz1.png" alt="Mapa Polski" />
      </section>
      <section id="baner2">
        <h1>Rzeki w województwie dolnośląskim</h1>
      </section>
    </header>
    <nav id="menu">
      <form method="post">
        <label><span class="opcje"><input type="radio" name="stany" value="wszystkie"/>Wszystkie</span></label>
        <label><span class="opcje"><input type="radio" name="stany" value="ostrzegawczy"/>Ponad stan ostrzegawczy</span></label>
        <label><span class="opcje"><input type="radio" name="stany" value="alarmowy"/>Ponad stan alarmowy</span></label>
        <button type="submit">Pokaż</button>
      </form>
    </nav>
    <main>
      <article id="lewy">
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
              $conn = mysqli_connect('localhost', 'root', '', 'rzeki');
              if(!$conn){
                exit();
              }else{
                if(isset($_POST['stany'])){
                  switch($_POST['stany']){
                    case "wszystkie":
                      $wynik = mysqli_query($conn, "SELECT wodowskazy.nazwa, wodowskazy.rzeka, wodowskazy.stanOstrzegawczy, wodowskazy.stanAlarmowy, pomiary.stanWody FROM `wodowskazy` JOIN pomiary ON pomiary.wodowskazy_id = wodowskazy.id WHERE pomiary.dataPomiaru LIKE '2022-05-05';");
                      while($row = mysqli_fetch_array($wynik)){
                        echo "<tr>";
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "<td>$row[3]</td>";
                        echo "<td>$row[4]</td>";
                        echo "</tr>";
                      }
                      break;
                    case "ostrzegawczy":
                      $wynik = mysqli_query($conn, "SELECT wodowskazy.nazwa, wodowskazy.rzeka, wodowskazy.stanOstrzegawczy, wodowskazy.stanAlarmowy, pomiary.stanWody FROM `wodowskazy` JOIN pomiary ON pomiary.wodowskazy_id = wodowskazy.id WHERE pomiary.dataPomiaru LIKE '2022-05-05' AND pomiary.stanWody > wodowskazy.stanOstrzegawczy ;");
                      while($row = mysqli_fetch_array($wynik)){
                        echo "<tr>";
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "<td>$row[3]</td>";
                        echo "<td>$row[4]</td>";
                        echo "</tr>";
                      }
                      break;
                    case "alarmowy":
                      $wynik = mysqli_query($conn, "SELECT wodowskazy.nazwa, wodowskazy.rzeka, wodowskazy.stanOstrzegawczy, wodowskazy.stanAlarmowy, pomiary.stanWody FROM `wodowskazy` JOIN pomiary ON pomiary.wodowskazy_id = wodowskazy.id WHERE pomiary.dataPomiaru LIKE '2022-05-05' AND pomiary.stanWody > wodowskazy.stanAlarmowy;");
                      while($row = mysqli_fetch_array($wynik)){
                        echo "<tr>";
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "<td>$row[3]</td>";
                        echo "<td>$row[4]</td>";
                        echo "</tr>";
                      }
                      break;
                  }
                }

              }
              mysqli_close($conn);
            ?>
        </table>
      </article>
      <aside id="prawy">
        <h3>Informacje</h3>
        <ul>
            <li>Brak ostrzeżeń o burzach z gradem</li>
            <li>Smog w mieście Wrocław</li>
            <li>Silny wiatr w Karkonoszach</li>
        </ul>
        <h3>Średnie stany wód</h3>
        <?php
          $conn = mysqli_connect('localhost', 'root', '', 'rzeki');
          if(!$conn){
            exit();
          }else{
            $wynik = mysqli_query($conn, "SELECT `dataPomiaru`, AVG(`stanWody`) FROM `pomiary` GROUP BY `dataPomiaru` ORDER BY `dataPomiaru`;");
            while($row = mysqli_fetch_array($wynik)){
              echo "<p>$row[0] $row[1]</p>";
            }
          }
          mysqli_close($conn);
        ?>
        <a href="https://komunikaty.pl">Dowiedz się więcej</a>
        <img src="obraz2.jpg" alt="rzeka">
       </aside>
    </main>
    <footer id="stopka">
        <p>Stronę wykonał: Adam Strużyk 5TI</p>
    </footer>
  </body>
</html>

