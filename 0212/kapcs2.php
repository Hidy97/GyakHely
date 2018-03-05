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

//$sql = "SELECT nev, jelszo FROM tagok
//ORDER BY nev";
//$sql = "SELECT count(*) AS darab
//FROM tagok
//ORDER BY nev";
$sql = "SELECT count(*) AS darab
FROM hely
WHERE varos > 'B' 
AND varos < 'C' ";

$eredmeny = mysqli_query($kapcs,$sql);

//var_dump($eredmeny);

while ($sor = mysqli_fetch_array($eredmeny))
//var_dump($sor);
{
echo $sor = ['darab'];
//    echo $sor['darab'];
}
?>










