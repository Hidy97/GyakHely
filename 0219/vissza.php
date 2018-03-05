<?php
include ('halmazallapot.php');

$fok = $_GET['fok'];

if($fok <= 0) $fok = 0;
if($fok > 0 && $fok <= 100) $fok = 100;
if($fok > 100) $fok = 101;

$sql = "
SELECT *
FROM jegy
";
//var_dump($abOK);

$eredmeny = mysqli_query($kapcs, $sql);
echo "<select>";
//$sor = mysqli_fetch_array($eredmeny);

while ($sor = mysqli_fetch_array($eredmeny))
{
echo "<option value=", $sor['oszt'], ">",
    $sor['ertekeles'];
}

echo "</select>";
//$eredmeny = mysqli_query($kapcs, $sql);
//
//$sor = mysqli_fetch_array($eredmeny);
//
//echo $sor['i'];
?>