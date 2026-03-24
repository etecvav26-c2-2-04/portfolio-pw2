<?php
include("ex5H.php");
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
$n4 = $_POST["n4"];
$n5 = $_POST["n5"];

    $fatorial1 = 1;
for ($i = $n1; $i > 1; $i--) {
    $fatorial1 *= $i;
}
    $fatorial2 = 1;
for ($i = $n2; $i > 1; $i--) {
    $fatorial2 *= $i;
}
    $fatorial3 = 1;
for ($i = $n3; $i > 1; $i--) {
    $fatorial3 *= $i;
}
    $fatorial4 = 1;
for ($i = $n4; $i > 1; $i--) {
    $fatorial4 *= $i;
}
    $fatorial5 = 1;
for ($i = $n5; $i > 1; $i--) {
    $fatorial5 *= $i;
}
echo $fatorial1 +$fatorial2 +$fatorial3 +$fatorial4 +$fatorial5;

?>
