<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forum o psach</title>
    <link rel="stylesheet" href="styl4.css" />
  </head>
  <body>
    <header id="baner">
      <h1>Forum wielbicieli psów</h1>
    </header>
    <section id="lewy">
      <img src="obraz.jpg" alt="foksterier" />
    </section>
    <section id="prawy1">
      <h2>Zapisz się</h2>
      <form method="post">
        login: <input type="text" name="login" /><br />
        hasło: <input type="password" name="haslo1" /><br />
        powtórz hasło: <input type="password" name="haslo2" /> <br />
        <input type="submit" value="Zapisz" />
      </form>
      <?php
        $conn = mysqli_connect('localhost','root','', 'psy');
        if(!$conn){
          exit();
        }
        else{
          @$login = $_POST['login'];
          @$haslo1 = $_POST['haslo1'];
          @$haslo2 = $_POST['haslo2'];
          if(isset($login) && isset($haslo1) && isset($haslo2)){
            if(empty($login) || empty($haslo1) || empty($haslo2)){
              echo "<p>wypełnij wszystkie pola</p>";
            }
            else{
              $zapytanie3 = "SELECT `login` FROM `uzytkownicy`;";
              $wynik3 = mysqli_query($conn, $zapytanie3);
              $czy_login_wystepuje = false;
              $hasla_takie_same = false;
              while($tab = mysqli_fetch_array($wynik3)){
                if($tab[0]==$login){
                  $czy_login_wystepuje=true;
                  echo "<p>login występuje w bazie danych, konto nie zostało dodane</p>";
                }
              }
              if(!$czy_login_wystepuje && $haslo1 != $haslo2){
                echo "<p>hasła nie są takie same, konto nie zostało dodane</p>";
              }
              else if(!$czy_login_wystepuje && $haslo1 == $haslo2){
                $szyfr = sha1($haslo1, false);
                $zapytanie2 = "INSERT INTO `uzytkownicy`(`login`, `haslo`) VALUES ('$login','$szyfr');";
                mysqli_query($conn,$zapytanie2);
                echo "<p>Konto zostało dodane</p>";
              }
            }
          }
        }
        mysqli_close($conn);
      ?>
    </section>
    <section id="prawy2">
      <h2>Zapraszamy wszystkich</h2>
      <ol>
        <li>właścicieli psów</li>
        <li>weterynarzy</li>
        <li>tych, co chcą kupić psa</li>
        <li>tych, co lubią psy</li>
      </ol>
      <a href="regulamin.html">Przeczytaj regulamin forum</a>
    </section>
    <footer id="stopka">Stronę wykonał: Adam Strużyk 5TI</footer>
  </body>
</html>
