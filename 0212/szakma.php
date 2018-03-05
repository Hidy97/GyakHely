<?php

$host = "mysql.hostinger.hu";
$user = "u466192019_mityu";
$pass = "szilva";

$kapcs = mysqli_connect(
$host, $user, $pass
) OR die('Nem sikerült!');

mysqli_select_db($kapcs, "u466192019_mityu");

$szakma = $_GET['szakma'];

$sql = "SELECT *
FROM szak
WHERE szakma = '$szakma' ";

$eredmeny = mysqli_query($kapcs, $sql);

if ( $sor = mysqli_fetch_array($eredmeny))
{
    echo $sor['pont'];
}
else {
    echo "Nincs!";
}



?>