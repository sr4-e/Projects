<?php 

//Arithmetic operators
echo "Arithmetic operators: <br>";
$val1 = 13;
$val2 = 4;

echo $val1 + $val2 ."<br>";
echo $val1 - $val2 ."<br>";
echo $val1 * $val2 ."<br>";
echo $val1 / $val2 ."<br>";
echo $val1 % $val2 ."<br>";
echo $val1 ** $val2 ."<br> <br>";


//Assignment operators
echo "Assignment operators: <br>";
$val3 = 4;
$val4 = 8;

$val3 = $val4;
echo "$val3 <br>";
$val3+= 4;
echo "$val3 <br>";
$val3 -= 5;
echo "$val3 <br>";
$val3 *= 2;
echo "$val3 <br>";
$val3 /= 1;
echo "$val3 <br>";
$val3 %= 6 ;
echo "$val3 <br> <br>";


//Comparison operators
echo "Comparison operators: <br>";
$val5 = 8;
$val6 = 13;

var_dump($val5 == $val6);
echo "<br>";
var_dump($val5 != $val6);
echo "<br>";
var_dump($val5 === $val6);
echo "<br>";
var_dump($val5 !== $val6);
echo "<br>";
var_dump($val5 > $val6);
echo "<br>";
var_dump($val5 < $val6);
echo "<br>";
var_dump($val5 >= $val6);
echo "<br>";
var_dump($val5 <= $val6);
echo "<br> <br>";


//Logical operators
echo "Logical operators: <br>";
if($val5 == 7 && $val6 == 13 )
echo "It's True <br>";
else
echo "It's False <br>";
if($val5 == 7 and $val6 == 13 )
echo "It's True <br>";
else
echo "It's False <br>";
if($val5 == 7 || $val6 == 13 )
echo "It's True <br>";
else
echo "It's False <br>";
if($val5 == 7 or $val6 == 13 )
echo "It's True <br>";
else
echo "It's False <br>";
if($val5 == 7 xor $val6 == 13 )
echo "It's True <br>";
else
echo "It's False <br>";
if(!($val5 == 7))
echo "It's True <br>";
else
echo "It's False <br>";

?>
