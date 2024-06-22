<?php

// create();

echo "<pre/>";
delete();

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

//edit 
function edit($id){ 
   try{
      $pdo = new PDO("mysql:host=localhost;dbname=school","root","");

      $statement = $pdo->query("SELECT * FROM `Students` WHERE `id` = $id");

      $student = $statement->fetch(PDO::FETCH_OBJ);


      if($student){
         var_dump($student);
         echo "Edit Successful";
      }else{
         echo "Failed";
      }

      
   }catch(PDOException $e){

      echo "<pre/>";
   die(var_dump($e->getMessage()));

   }catch(Exception $e){

      die(var_dump($e->getMessage()));
   }

 }

 //update
 function update()
 {
   try{
      $pdo = new PDO("mysql:host=localhost;dbname=school","root","");

      $statement = $pdo->query("UPDATE `Students` SET `email` = 'jame@gmail.com' WHERE `id` = '37'");

      // $student = $statement->fetch(PDO::FETCH_OBJ);
      if($statement){
       
         echo "Update Successful";
      }else{
         echo "Update Failed";
      }

      
   }catch(PDOException $e){

      echo "<pre/>";
   die(var_dump($e->getMessage()));

   }catch(Exception $e){

      die(var_dump($e->getMessage()));
   }

 }

 //delete
 function delete()
 {

   try{
      $pdo = new PDO("mysql:host=localhost;dbname=school","root","");

      $statement = $pdo->query("DELETE FROM Student WHERE id = 1");

      die(var_dump($statement));

      if($statement){
         echo "Delete Successful";
      }else{
         echo "Delete Failed";
      }

      
   }catch(PDOException $e){

      echo "<pre/>";
   die(var_dump($e->getMessage()));

   }catch(Exception $e){

      die(var_dump($e->getMessage()));
   }
 }




