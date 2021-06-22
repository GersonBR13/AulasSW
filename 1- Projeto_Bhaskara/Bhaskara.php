<?php 

$a = 1;
echo "a = {$a}";
echo "<br>";

$b = 12;
echo "b = {$b}";
echo "<br>";

$c = -13;
echo "c = {$c}";
echo "<br>";
echo "<br>";
$delta = (pow($b, 2)) -4 * $a * $c;
$x1 = (-$b + sqrt($delta)) / (2 * $a);
$x2 = (-$b - sqrt($delta)) / (2 * $a);


echo "Sendo A = 1, B = 12 e C = -13";
echo "<br>";
echo "Sendo Delta = {$delta}";
echo "<br>";
echo "Temos x1 = {$x1} e x2 = {$x2}";

?>