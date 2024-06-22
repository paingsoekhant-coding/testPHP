<?php 
//  php.ini 

// phpinfo();
 try{
    $pdo = new PDO("mysql:host=localhost;dbname=s","root","");

   echo "Database Connect Successful!";

 }catch(PDOException $e){

    echo "<pre/>";
 die(var_dump($e->getMessage()));

 }catch(Exception $e){

    die(var_dump($e->getMessage()));
 }


//  die

