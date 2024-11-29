<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Podróże dalekie i bliskie</title>
    <link rel="stylesheet" href="styl6.css" />
  </head>
  <body>
    <header id="baner">
      <h1>WESOŁA WYPRAWA</h1>
    </header>
    <section id="ciasteczka">
    <?php
      if(!isset($_COOKIE['ciastko'])){
        setcookie("ciastko",1,time()+3600, 'localhost');
        echo "<p>Witaj! Nasza strona używa ciasteczek</p>";
      }
      else{
        echo "<p>Witaj ponownie na naszej stronie</p>";
      }
    ?>
    </section>
    <section id="lewy">
      <table>
        <tr>
          <td><img src="polska.jpg" alt="zwiedzanie Krakowa" /></td>
          <td><img src="wlochy.jpg" alt="Wenecja i nie tylko" /></td>
        </tr>
        <tr>
          <td><img src="grecja.jpg" alt="Gorące greckie wyspy" /></td>
          <td><img src="hiszpania.jpg" alt="Słoneczna Barcelona" /></td>
        </tr>
      </table>
    </section>
    <section id="prawy">
      <h3>Proponujemy wycieczki</h3>
      <ul>
        <li>
          autokarowe
          <ol>
            <li>po Polsce z przewodnikiem</li>
            <li>do Niemiec i Czech</li>
          </ol>
        </li>
        <li>
          samolotem
          <ol>
            <li>wczasy w Grecji</li>
            <li>zwiedzanie Barcelony</li>
            <li>zwiedzanie Wenecji</li>
          </ol>
        </li>
      </ul>
      <h3>Pobierz dokumenty</h3>
      <p>
        <a href="regulamin.txt" download
          >Regulamin korzystania z usług biura podróży</a
        >
      </p>
      <p>
        <a href="http://galeria.pl/" target="_blank"
          >Tu znajdziesz zdjęcia z naszych wycieczek</a
        >
      </p>
    </section>
    <footer id="stopka">Stronę przygotował: Adam Strużyk 5TI</footer>
  </body>
</html>

