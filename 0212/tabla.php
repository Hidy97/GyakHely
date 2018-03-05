<?php

$host = "mysql.hostinger.hu";
$user = "u466192019_mityu";
$pass = "szilva";

$kapcs = mysqli_connect(
$host, $user, $pass
) OR die('Nem sikerült!');

mysqli_select_db($kapcs, "u466192019_mityu");

$id = $_GET['id'];

$sql = "SELECT *
FROM kategoria
WHERE id = '$id' ";

$eredmeny = mysqli_query($kapcs, $sql);

if ( $sor = mysqli_fetch_array($eredmeny))
{
    echo $sor['id'];
    echo '<br>=====<br>';
    echo $sor['nev'];
    echo '<br>=====<br>';
    echo $sor['pik'];
    echo '<br>=====<br>';
    echo $sor['leiras'];
}
else {
    return;
}



?>