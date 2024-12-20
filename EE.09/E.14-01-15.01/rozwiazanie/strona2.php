<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>POTĘGOWANIE</title>
    <script src="main.js"></script>
    <link rel="stylesheet" href="styl.css" />
  </head>
  <body>
    <header id="baner">
      <a href="index.html">
        <img src="baner.jpg" alt="baner" />
      </a>
    </header>
    <main>
      <aside id="menu">
        Menu <br />
        - <a href="strona1.html">proste działania</a> <br />
        - <a href="strona2.php">potęgowanie</a>
      </aside>
      <section id="tresc">
        <h1>POTĘGOWANIE</h1>
        <form method="post">
          Podaj podstawę potęgi: <input type="number" name="podstawa"> <br> <br>
          Podaj dodatni, całkowity wykładnik potęgi: <input type="number" name="wykladnik"><br><br>
          <input type="submit" value="POTĘGOWANIE"> <br>
        </form>
        <?php
          @$podstawa = $_POST['podstawa'];
          @$wykladnik = $_POST['wykladnik'];
          if(empty($podstawa) || empty($wykladnik)){
            echo "Wpisz podstawę i wykładnik potęgi.";
          }
          else if($wykladnik < 0){
            echo "Wykładnik potęgi musi być dodatni.";
          }
          else if($wykladnik == 0){
            echo "Wynik działania wynosi: 1";
          }
          else{
            $potega = 1;
            for($i = 0; $i<$wykladnik; $i++){
              $potega = $potega * $podstawa;
            }
            echo "Wynik działania wynosi: ".$potega;
          }
        ?>
      </section>
    </main>
  </body>
</html>
