<?php 

require_once "dataAccess.php";

class BL_student extends Database
{
    public function create($name , $email , $gender , $dob , $age)
    {
        $pdo = $this->connect();

        $newStudent = $pdo->query("INSERT INTO students (name ,email ,gender ,dob ,age) VALUES
        ('$name','$email','$gender','$dob' , $age)");

        if($newStudent){
            echo "New Student Create Successful!";
        }
    }

    public function read()
    {
        $pdo = $this->connect();

        $statement = $pdo->query("SELECT * FROM `students`");

        $students = $statement->fetchAll(PDO::FETCH_OBJ);

        return $students;
      
        // foreach($students as $student){
        //     echo "<pre/>";
                
        //     echo $student->name. " |" . $student->email . "|" . $student->gender . "|" . $student->dob . "|" . $student->age. "<br>";
        // }
    }

    public function edit($id)
    {
        $pdo = $this->connect();

        $statement = $pdo->query("SELECT * FROM `Students` WHERE `id` = $id");

        $student = $statement->fetch(PDO::FETCH_OBJ);

        echo $student->id . "|" .$student->name. " |" . $student->email . "|" . $student->gender . "|" . $student->dob . "|" . $student->age. "<br>";

    }

    public function update($id ,$name , $email)
    {
        $pdo = $this->connect();

        $statement = $pdo->query("UPDATE `Students` SET `name` = '$name',`email` = '$email' WHERE `id` = $id");

        if($statement){
     
           echo "Update Successful";
        }else{
           echo "Update Failed";
        }
    }

    public function delete($id)
    {
        $pdo = $this->connect();
        $statement = $pdo->query("DELETE FROM Students WHERE id = $id");

        if($statement){

           echo "Delete Successful";
        }

    }
}