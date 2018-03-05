<?php

$host = "mysql.hostinger.hu";
$user = "u466192019_mityu";
$pass = "szilva";

$kapcs = mysqli_connect(
$host, $user, $pass
) OR die('Nem sikerült a kapcsi, more!');

$abOK = mysqli_select_db($kapcs, "u466192019_mityu")
OR die('Nem sikerült kiválasztani az adatbázist!');

?>










