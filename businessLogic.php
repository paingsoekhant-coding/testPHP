<?php 

require_once "dataAccess.php";

class BL_student extends Database
{
    public function create($name , $email , $gender , $dob , $age)
    {
        $pdo = $this->connect();

        $newStudent = $pdo->prepare("INSERT INTO students (name ,email ,gender ,dob ,age) VALUES
        (:name , :email , :gender , :dob , :age)");

        $newStudent->bindParam(':name',$name);
        $newStudent->bindParam(':email',$email);
        $newStudent->bindParam(':gender',$gender);
        $newStudent->bindParam(':dob',$dob);
        $newStudent->bindParam(':age',$age);

        if($newStudent->execute()){
            echo "New Student Create Successful!";
        }else{
            echo "New Student Create Failed!";
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

        $statement = $pdo->prepare("SELECT * FROM `Students` WHERE `id` = :id");

        $statement->bindParam(':id',$id);

       if( $statement->execute()){
        $student = $statement->fetch(PDO::FETCH_OBJ);
        return $student;
       };

        // echo $student->id . "|" .$student->name. " |" . $student->email . "|" . $student->gender . "|" . $student->dob . "|" . $student->age. "<br>";

    }

    public function updateStudent($id ,$name , $email,$gender, $dob , $age)
    {
        $pdo = $this->connect();

        $statement = $pdo->prepare("UPDATE `Students` SET `name` = :name,`email` = :email , `gender` = :gender , `dob` = :dob , `age` = :age WHERE `id` = :id");

        $statement->bindParam(':id',$id);
        $statement->bindParam(':name',$name);
        $statement->bindParam(':email',$email);
        $statement->bindParam(':gender',$gender);
        $statement->bindParam(':dob',$dob);
        $statement->bindParam(':age',$age);

        if($statement->execute()){
            echo " Student Update Successful!";
        }else{
            echo " Student Update Failed!";
        }

    }


    public function delete($id)
    {
        $pdo = $this->connect();
        $statement = $pdo->prepare("DELETE FROM Students WHERE id = :id");

        $statement->bindParam(':id',$id);

        if($statement->execute()){

           echo "Delete Successful";
        }

    }
}