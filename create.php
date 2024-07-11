<?php

require_once "businessLogic.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
}

$student = new BL_student();
$student->create($name , $email , $gender , $dob , $age);

?>