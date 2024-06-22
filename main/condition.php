<?php 

$money = true;

$x = 100000;

if($money){
  
    if($x >= 10000){
        echo "Go to Ocean";
    }else{
        echo "Sleep";
    }
}

echo "<br>";

//switch 
$favcolor = "pink";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "No Data Found";
}
