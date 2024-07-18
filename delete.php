<?php 

require_once "businessLogic.php";

$statement = new BL_student;

$id = $_GET['id'];

$statement->delete($id);