<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Twoje BMI</title>
    <link rel="stylesheet" href="styl3.css" />
  </head>
  <body>
    <header id="logo">
      <img src="wzor.png" alt="wzór BMI" />
    </header>
    <header id="baner">
      <h1>Oblicz swoje BMI</h1>
    </header>
    <section id="glowny">
      <table>
        <tr>
          <th>Interpretacja BMI</th>
          <th>Wartość minimalna</th>
          <th>Wartość maksymalna</th>
        </tr>
        <?php
          $conn = mysqli_connect('localhost','root','','egzamin');
          if(!$conn)
          {
            exit();
          }
          else{
            $zapytanie1 = "SELECT `informacja`,`wart_min`,`wart_max` FROM `bmi`;";
            $wynik = mysqli_query($conn,$zapytanie1);
            $text = "";
            while($tab = mysqli_fetch_array($wynik)){
              $text .= "<tr><td>$tab[0]</td><td>$tab[1]</td><td>$tab[2]</td></tr>";
            }
            echo $text;
          }
          mysqli_close($conn);
        ?>
      </table>
    </section>
    <section id="lewy">
      <h2>Podaj wagę i wzrost</h2>
      <form method="post">
        Waga: <input type="number" min="1" name="waga"/> <br />
        Wzrost w cm: <input type="number" min="1" name="wzrost"/> <br />
        <input type="submit" value="Oblicz i zapamiętaj wynik" />
      </form>
      <?php
        $conn = mysqli_connect('localhost','root','','egzamin');
        if(!$conn)
        {
          exit();
        }
        else{
          @$wzrost = $_POST['wzrost'];
          @$waga = $_POST['waga'];
          if(!empty($wzrost) && !empty($waga)){
            $bmi = ($waga/($wzrost*$wzrost))*10000;
            echo "Twoja waga: $waga; Twój wzrost: $wzrost<br> BMI wynosi: $bmi";
            //1 - niedowaga, 2 - prawidlowa, 3 - nadwaga, 4 - otylosc
            if($bmi >= 0 && $bmi <= 18){
              $interpretacja = 1;
            }
            else if($bmi >= 19 && $bmi <= 25)
            {
              $interpretacja = 2;
            }
            else if($bmi >= 26 && $bmi <=30){
              $interpretacja = 3;
            }
            else{
              $interpretacja = 4;
            }
            $zapytanie2 = "INSERT INTO `wynik`(`bmi_id`, `data_pomiaru`, `wynik`) VALUES ($interpretacja,".date('Y-m-d').",$bmi);";
            mysqli_query($conn, $zapytanie2);
          }
        }
        mysqli_close($conn);
      ?>
    </section>
    <section id="prawy">
      <img src="rys1.png" alt="ćwiczenia" />
    </section>
    <footer id="stopka">
      Autor: Adam Strużyk 5TI <a href="kwerendy.txt">Zobacz kwerendy</a>
    </footer>
  </body>
</html>


