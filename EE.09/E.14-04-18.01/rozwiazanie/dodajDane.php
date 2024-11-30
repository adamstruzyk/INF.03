<?php
$conn = mysqli_connect('localhost','root','','ogloszenia');

@$imie = $_POST['imie'];
@$nazwisko = $_POST['nazwisko'];
@$telefon = $_POST['telefon'];
@$email = $_POST['email'];

if(isset($imie) && isset($nazwisko) && isset($telefon) && isset($email)){
    mysqli_query($conn, "INSERT INTO `uzytkownik`(`imie`, `nazwisko`, `telefon`, `email`) VALUES ('$imie','$nazwisko','$telefon','$email');");
}
mysqli_close($conn);
?>