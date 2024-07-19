<?php

if($_POST['userName'] == "admin" && $_POST['password']){
    session_start();
    $_SESSION['logged_in'] = true;
    $_SESSION['userName'] = "admin";
    echo "Login Successful";
}else
{
    echo "Login Failed";
}
