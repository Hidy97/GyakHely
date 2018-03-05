<?php
include ('halmazallapot.php');

$fok = $_GET['fok'];

if($fok <= 0) $fok = 0;
if($fok > 0 && $fok <= 100) $fok = 100;
if($fok > 100) $fok = 101;

$sql = "
SELECT halmaz
FROM viz
WHERE fok = $fok
";
//var_dump($abOK);

$eredmeny = mysqli_query($kapcs, $sql);

$sor = mysqli_fetch_array($eredmeny);

echo $sor['halmaz'];

//$eredmeny = mysqli_query($kapcs, $sql);
//
//$sor = mysqli_fetch_array($eredmeny);
//
//echo $sor['i'];
?>