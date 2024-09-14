<?php
    //nawiazanie polaczenia z baza danych
    $conn = mysqli_connect('localhost','root','','baza');
    if(!$conn)
    {
        exit();
    }
    else
    {
        //pobranie danych z formularza
        $data_rezerwacji = $_POST['data'];
        $ile_osob = $_POST['ile_osob'];
        $nr_tel = $_POST['nr_tel'];

        //wyslanie zapytania do bazy
        $polecenie = "INSERT INTO `rezerwacje`(`data_rez`, `liczba_osob`, `telefon`) VALUES ('$data_rezerwacji','$ile_osob','$nr_tel');";
        mysqli_query($conn,$polecenie);

        echo "Dodano rezerwację do bazy";
    }

    //zamkniecie polaczenia
    mysqli_close($conn);
?>