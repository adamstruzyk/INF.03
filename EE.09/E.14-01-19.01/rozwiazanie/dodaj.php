<?php
$conn = mysqli_connect('localhost','root','','dane');
if(!$conn){
    exit();
}else{
    @$tytul = $_POST['tytul'];
    @$gatunek = $_POST['gatunek'];
    @$rok = $_POST['rok'];
    @$ocena = $_POST['ocena'];
    if(isset($tytul) && isset($gatunek) && isset($rok) && isset($ocena)){
        $zapytanie1 = "INSERT INTO `filmy`(`gatunki_id`, `tytul`, `rok`, `ocena`) VALUES ($gatunek,'$tytul','$rok','$ocena');";
        mysqli_query($conn, $zapytanie1);

        echo "Film $tytul został dodany do bazy";
    }
}
mysqli_close($conn);
?>