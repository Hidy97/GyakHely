<?php

$host = "mysql.hostinger.hu";
$user = "u466192019_mityu";
$pass = "szilva";

$kapcs = mysqli_connect(
$host, $user, $pass
) OR die('Nem sikerült a kapcsi, more!');

//if () {} else {}

mysqli_select_db($kapcs, "u466192019_mityu")
OR die('Nem sikerült kiválasztani az adatbázist!');

$nev = $_GET['nev'];
$jelszo = $_GET['jelszo'];

$sql = "SELECT * FROM tagok WHERE nev = '$nev' AND jelszo = '$jelszo'";

$eredmeny = mysqli_query($kapcs, $sql);

while ( $sor = mysqli_fetch_array($eredmeny))
{
    echo "Ön jól belelépett.";
}
else {
    echo "Nem jó!";
}
?>