<!-- Arithmetic Operators -->
<!-- + - * / % ** -->
<?php 

echo 10 + 10;
echo "<br>";

echo 10 - 5;
echo "<br>";

echo 10 * 5;
echo "<br>";

echo 10 / 5;
echo "<br>";

echo 10 % 5;
echo "<br>";

echo 2**2;
echo "<br>";

echo 3**3;
echo "<br>";

// Assignment Operators

$userName = "John";

$x = 100;

$y = 50;

echo $x-=$y;
echo "<br>";

// Comparison Operators

// // == equal 
//  $first = 10; //int
// $sec = "10"; //string
// if($first === $sec){
//     echo "Equal";
// }else{
//     echo "Not Equal";
// }

$p = 10;
$s = 10;
if($p >= $s){
    echo "true";
}else{
    echo "false";
}
echo "<br>";

//Increment / Decrement Operators
$i = 10;
echo $i++;
echo "<br>";

$e = 10;
echo ++$e;