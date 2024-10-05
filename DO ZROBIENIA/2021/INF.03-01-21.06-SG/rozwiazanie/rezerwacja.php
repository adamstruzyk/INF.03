<?php
    $conn = mysqli_connect('localhost','root','','baza');
    if(!$conn){
        exit();
    }
    else{
        @$ile = $_POST['ile_osob'];
        @$data = $_POST['data'];
        @$nrtel = $_POST['nrtel'];

        if(isset($ile) && isset($data) && isset($nrtel)){
            $zapytanie = "INSERT INTO `rezerwacje`(`nr_stolika`, `data_rez`, `liczba_osob`, `telefon`) VALUES (1,'$data','$ile','$nrtel');";
            mysqli_query($conn, $zapytanie); 
            echo "Dodano rezerwację do bazy"; 
        }

    }
    mysqli_close($conn);

?>