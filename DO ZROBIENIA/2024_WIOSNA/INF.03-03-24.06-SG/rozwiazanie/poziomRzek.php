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
    <menu id="menu">
      <form method="post">
        <input type="radio" name="opcje" /><span class="txt">Wszystkie</span> 
        <input type="radio" name="opcje" /><span class="txt">Ponad stan ostrzegawczy</span> 
        <input type="radio" name="opcje" /><span class="txt">Ponad stan alarmowy</span> 
        <input type="submit" value="Pokaż" />
      </form>
    </menu>
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
        <!--skrypt 1-->
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
      <!--skrypt 2-->
      <a href="https://komunikaty.pl">Dowiedz się więcej</a>
      <img src="obraz2.jpg" alt="rzeka" />
    </section>
    <footer id="stopka">
      <p>Stronę wykonał: Adam Strużyk 5TI</p>
    </footer>
  </body>
</html>
