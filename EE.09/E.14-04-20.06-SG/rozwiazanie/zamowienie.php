<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sklep</title>
    <link rel="stylesheet" href="styl.css" />
  </head>
  <body>
    <header id="baner">
      <h1>Ozdoby - sklep</h1>
    </header>
    <section id="lewy">
      <h2>Ozdoby</h2>
      <a href="galeria.html">Galeria</a>
      <a href="zamowienie.php">Zamówienie</a>
    </section>
    <section id="srodkowy">
        <p>Dodaj użytkownika</p>
        <form method="post">
            Imię: <input type="text" name="imie"><br>
            Nazwisko: <input type="text" name="nazwisko"><br>
            e-mail: <input type="email" name="email"><br>
            <button type="submit">WYŚLIJ</button>
        </form>
        <?php
            $conn = mysqli_connect('localhost','root','','sklep');
            if(!$conn){
                exit();
            }
            else{
                @$imie = $_POST['imie'];
                @$nazwisko = $_POST['nazwisko'];
                @$email = $_POST['email'];
                if(isset($imie) && isset($nazwisko) && isset($email)){
                    $zapytanie = "INSERT INTO `zamowienia`(`imie`, `nazwisko`, `adres_email`) VALUES ('$imie','$nazwisko','$email');";
                    mysqli_query($conn, $zapytanie);
                }
            }
            mysqli_close($conn);
        ?>
    </section>
    <section id="prawy">
      <img src="animacja.gif" />
    </section>
    <footer id="stopka">
      <h3>Autor strony: Adam Strużyk 5TI</h3>
    </footer>
  </body>
</html>
