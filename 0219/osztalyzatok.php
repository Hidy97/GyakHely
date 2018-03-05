<?php
include ('osztalyzat.php');

$oszt = $_GET['oszt'];

$sql = "
SELECT ertekeles
FROM jegy
WHERE oszt = $oszt
";
//var_dump($abOK);

$eredmeny = mysqli_query($kapcs, $sql);

$sor = mysqli_fetch_array($eredmeny);

echo $sor['ertekeles'];

//$eredmeny = mysqli_query($kapcs, $sql);
//
//$sor = mysqli_fetch_array($eredmeny);
//
//echo $sor['i'];
?>