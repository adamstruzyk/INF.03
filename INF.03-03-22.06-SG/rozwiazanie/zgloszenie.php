<?php
    //pobranie danych z formularza
    $lowisko = $_POST['lowisko'];
    $data = $_POST['data'];
    $sedzia = $_POST['sedzia'];

    //polaczenie z baza danych
    $pol = mysqli_connect('localhost','root','','wedkarstwo');
    if(!$pol)
    {
        exit();
    }
    else
    {
        $zapytanie = "INSERT INTO `zawody_wedkarskie`(`Karty_wedkarskie_id`, `Lowisko_id`, `data_zawodow`, `sedzia`) VALUES (0,'$lowisko','$data','$sedzia');";

        //wyslanie zapytania do bazy
        mysqli_query($pol, $zapytanie);
    }
    mysqli_close($pol);
?>