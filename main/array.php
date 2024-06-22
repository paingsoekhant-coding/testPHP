<?php 

// indexed array 
//  1. array();
// 2. [] ;

// array create 
$data = [ 10 , 20 , 30 , 40 , 50 , 60 , 70 , 60 , 40 , 50 , 70 , 80 , 90 , 100 ];

//array read 
echo "<pre/>";
// var_dump($data);

//array update 
$data[4] = "hello";

// var_dump($data);

//add data to array 
$data[] = "new data";

// var_dump($data);

// associative  array 

// create 
$data2= [
    "name" => "mg mg" , 
    "age" => 20 , 
    "job" =>"Web Developer"
];

// var_dump($data2);

//update 
$data2["name"] = "Su Su";
$data2["job"] = "Frontend Dev";
// var_dump($data2);


// multidimensional array

$data3 = [
    "name" => "Kyaw Kyaw",
    "job" => "dev",
    "planguage" => ["php" , "javascript" , "bootstrap"],
];

var_dump($data3["planguage"][2]);


