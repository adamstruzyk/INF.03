<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css" />
  </head>
  <body>
    <div id="baner">
      <h1>Portal dla wędkarzy</h1>
    </div>
    <div id="lewy1">
      <h3>Ryby zamieszkujące rzeki</h3>
      <ol>
        <?php
          $conn = mysqli_connect('localhost','root','','wedkowanie');
          if(!$conn){
            exit();
          }
          else{
            $zapytanie3 = "SELECT ryby.`nazwa`, lowisko.akwen, lowisko.wojewodztwo FROM `ryby` JOIN lowisko ON lowisko.Ryby_id = ryby.id WHERE lowisko.rodzaj = 3;";
            $wynik = mysqli_query($conn,$zapytanie3);
            $text = '';
            while($tablica = mysqli_fetch_array($wynik)){
              $text .= '<li>';
              $text .= $tablica['nazwa'].' pływa w rzece '.$tablica['akwen'].', '.$tablica['wojewodztwo'];
              $text .= '</li>';
            }
            echo $text;
          }
          mysqli_close($conn);
        ?>
      </ol>
    </div>
    <div id="prawy">
      <img src="ryba1.jpg" alt="Sum" /> <br />
      <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <div id="lewy2">
      <h3>Ryby drapieżne naszych wód</h3>
      <table>
        <tr>
          <th>L.p.</th>
          <th>Gatunek</th>
          <th>Występowanie</th>
        </tr>
        <?php
          $conn = mysqli_connect('localhost','root','','wedkowanie');
          if(!$conn){
            exit();
          }
          else{
            $zapytanie1 = "SELECT `id`,`nazwa`,`wystepowanie` FROM `ryby` WHERE `styl_zycia` = 1;";
            $wynik = mysqli_query($conn,$zapytanie1);
            $text = '';
            while($tablica = mysqli_fetch_array($wynik)){
              $text .= '<tr>';
              $text .= '<td>'.$tablica['id'].'</td>'.'<td>'.$tablica['nazwa'].'</td>'.'<td>'.$tablica['wystepowanie'].'</td>';
              $text .= '</tr>';
            }
            echo $text;
          }
          mysqli_close($conn);
        ?>
      </table>
    </div>

    <div id="stopka">
      <p>Stronę wykonał: Adam Strużyk</p>
    </div>
  </body>
</html>
