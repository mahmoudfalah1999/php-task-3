<?php
//1
$x=655;
var_dump(is_int($x));
echo "<br>";
//2
$x=4.1;
echo var_dump(is_int($x));
echo "<br>";
//3
$x=2000.5;
echo var_dump(is_float($x));
echo "<br>";
//4
$x="farah";
echo var_dump(is_numeric($x));
echo "<br>";
//5
echo(min(0,100,-30,20));
echo(max(0,100,-30,20));
echo "<br>";
//6
echo(abs(-1258));
echo "<br>";
//7
echo(round(6.1));
echo(round(4.6));
echo "<br>";
//8
echo(rand());




?>