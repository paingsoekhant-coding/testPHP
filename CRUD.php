<?php

// create();
echo "<pre/>";
read();
function create()
{
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=school","root","");

        $statement = $pdo->query("INSERT INTO `students` (`name`,`email`,`gender`,`dob`,`age`) VALUES
        ('mary','john@gmail.com','male','1998-01-01' , 27)");

        echo "Data Create Successful!";


     }catch(PDOException $e){

        echo "<pre/>";
     die(var_dump($e->getMessage()));

     }catch(Exception $e){

        die(var_dump($e->getMessage()));
     }
}

//read
function read(){
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=school","root","");

        $statement = $pdo->query("SELECT * FROM `students`");

        $students = $statement->fetchAll(PDO::FETCH_OBJ);

        // die(var_dump($students));

    foreach($students as $student){
        echo "<pre/>";
        //array catch
        // echo $student['name']. " -" . $student['email'];

        //object catch
        echo $student->name. " -" . $student->email;
    }
     }catch(PDOException $e){

        echo "<pre/>";
     die(var_dump($e->getMessage()));

     }catch(Exception $e){

        die(var_dump($e->getMessage()));
     }

}


