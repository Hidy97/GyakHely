<?php
include ('php_proto.php');

$telep = $_GET['telep'];

$sql = "
SELECT *
FROM hely
";
//var_dump($abOK);

$eredmeny = mysqli_query($kapcs, $sql);
echo "<form action=gyakorlas2.php>";
echo "<select name='telep' >";
//$sor = mysqli_fetch_array($eredmeny);

while ($sor = mysqli_fetch_array($eredmeny))
{
echo "<option value=", $sor['id'], ">",
    $sor['varos'];
}

echo "</select>";
echo "<input type=submit>";
echo "</form>";


//$eredmeny = mysqli_query($kapcs, $sql);
//
//$sor = mysqli_fetch_array($eredmeny);
//
//echo $sor['i'];
?>