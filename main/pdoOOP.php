<?php 

class Database{

    public function dbConnect(){
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=sch","root","");

           echo "Database Connect Successful!";

         }catch(PDOException $e){

            echo "<pre/>";
         die(var_dump($e->getMessage()));

         }catch(Exception $e){

            die(var_dump($e->getMessage()));
         }
    }
}

$db = new Database();
$db->dbConnect();