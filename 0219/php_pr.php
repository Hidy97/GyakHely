<?php
include ('php_proto.php');

//var_dump($abOK);

$id = $_GET['id'];

$sql = "
SELECT nev
FROM allapot
WHERE id = 1
";

$eredmeny = mysqli_query($kapcs, $sql);

$sor = mysqli_fetch_array($eredmeny);

echo $sor['nev'];
?>