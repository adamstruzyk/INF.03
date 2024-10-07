<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portal społecznościowy</title>
    <link rel="stylesheet" href="styl5.css" />
  </head>
  <body>
    <div id="banerLewy">
      <h2>Nasze osiedle</h2>
    </div>
    <div id="banerPrawy">
      <?php
        $conn = mysqli_connect('localhost','root','','portal');
        if(!$conn){
          exit();
        }
        else{
          $zapytanie2 = "SELECT COUNT(*) FROM `dane`;";
          $wynik = mysqli_query($conn, $zapytanie2);
          $tablica = mysqli_fetch_array($wynik);
          echo '<h5>Liczba użytkowników portalu: '.$tablica['COUNT(*)'].'</h5>';
        }
        mysqli_close($conn);
      ?>
    </div>
    <div id="lewy">
      <h3>Logowanie</h3>
      <form method="post">
        login <br />
        <input type="text" name="login" /> <br />
        hasło <br />
        <input type="password" name="haslo"/> <br />
        <input type="submit" value="Zaloguj" />
      </form>
    </div>
    <div id="prawy">
      <h3>Wizytówka</h3>
      <div id="wizytowka">
        <?php
          $conn = mysqli_connect('localhost','root','','portal');
          if(!$conn){
            exit();
          }
          else{
            @$login = $_POST['login'];
            @$haslo = $_POST['haslo'];
            if(!empty($login) && !empty($haslo)){
              $zapytanie1 = "SELECT `haslo` FROM `uzytkownicy` WHERE `login` = '$login';";
              $wynik = mysqli_query($conn,$zapytanie1);
              if($tablica = mysqli_fetch_array($wynik)){
                //haslo z bazy
                $haslo_baza = $tablica['haslo'];

                //haslo przeslane formularzem zaszyfrowane (aby móc porównać oba hasla)
                $haslo_zaszyfrowane = sha1($haslo, false);

                //porównanie obu zaszyfrowanych hasel
                if($haslo_zaszyfrowane == $haslo_baza){
                  $zapytanie3 = "SELECT uzytkownicy.login, dane.rok_urodz, dane.przyjaciol, dane.hobby, dane.zdjecie FROM `uzytkownicy` JOIN dane ON dane.id = uzytkownicy.id WHERE uzytkownicy.login = '$login';";
                  $wynik = mysqli_query($conn, $zapytanie3);
                  $tablica = mysqli_fetch_array($wynik);
                  
                  echo '<img src="" alt="">';
                }
                else{
                  echo "hasło nieprawidłowe";
                }
              }
              else{
                echo "Login nie istnieje";
              }
            }
          }
          mysqli_close($conn);
        ?>
      </div>
    </div>
    <div id="stopka">
      <p>Stronę wykonał: Adam Strużyk 5TI</p>
    </div>
  </body>
</html>
