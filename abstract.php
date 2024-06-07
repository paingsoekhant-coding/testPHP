<?php 

abstract class Student 
{
    public $name = "mgmg"; //properties
    public abstract function data(); //method

    public function greet()
    {
        echo "test";
    }
   

}

class StudentInfo extends Student
{
    public function data()
    {
        echo " Hello World";
    }
    public function info()
    {
        $this->data();
    }
}

$info = new StudentInfo();
$info->info();
