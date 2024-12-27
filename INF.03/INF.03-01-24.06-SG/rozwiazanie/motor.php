<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Motocykle</title>
    <link rel="stylesheet" href="styl.css" />
  </head>
  <body>
    <img src="motor.png" alt="motocykl" id="motocykl" />

    <header id="baner">
      <h1>Motocykle - moja pasja</h1>
    </header>
    <main>
      <article id="lewy">
        <h2>Gdzie pojechać?</h2>
        <dl>
          <?php
            $conn = mysqli_connect('localhost','root','','motory');
            if(!$conn){
              exit();
            }else{
              $wynik = mysqli_query($conn, "SELECT wycieczki.nazwa, wycieczki.opis, wycieczki.poczatek, zdjecia.zrodlo FROM `wycieczki` JOIN zdjecia ON zdjecia.id = wycieczki.zdjecia_id;");
              while($row = mysqli_fetch_array($wynik)){
                echo "<dt>$row[0], rozpoczyna się w $row[2], <a href='$row[3].jpg'>zobacz zdjęcie</a></dt>";
                echo "<dd>$row[1]</dd>";
              }
            }
            mysqli_close($conn);
          ?>
        </dl>
      </article>
      <aside>
        <section id="prawy1">
          <h2>Co kupić?</h2>
          <ol>
            <li>Honda CBR125R</li>
            <li>Yamaha YBR125</li>
            <li>Honda VFR800i</li>
            <li>Honda CBR1100XX</li>
            <li>BMW R1200GS LC</li>
          </ol>
        </section>
        <section id="prawy2">
          <h2>Statystyki</h2>
          <p>Wpisanych wycieczek: 
            <?php
              $conn = mysqli_connect('localhost','root','','motory');
              if(!$conn){
                exit();
              }else{
                $wynik = mysqli_query($conn, "SELECT COUNT(*) FROM `wycieczki`;");
                while($row = mysqli_fetch_array($wynik)){
                  echo "<p>Wpisanych wycieczek: $row[0]</p>";
                }
              }
              mysqli_close($conn);
            ?>
          </p>
          <p>użytkowników forum: 200</p>
          <p>Przesłanych zdjęć: 1300</p>
        </section>
      </aside>
    </main>
    <footer id="stopka">
      <p>Stronę wykonał: Adam Strużyk 5TI</p>
    </footer>
  </body>
</html>

