<?php 

// die(var_dump($_POST));

require_once "businessLogic.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
}


$student = new BL_student();

$updateStudent = $student->updateStudent($id ,$name , $email,$gender, $dob , $age);