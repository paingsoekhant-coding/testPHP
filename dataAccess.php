<?php 

class Database
{
    public function connect()
    {
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=school","root","");

            return $pdo;

         }catch(PDOException $e){

            echo "<pre/>";

         die(var_dump($e->getMessage()));

         }catch(Exception $e){

            die(var_dump($e->getMessage()));
         }
    }
}