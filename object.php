<?php 

class Student 
{
    public $name = "mg mg";

    public $age = 20;

    public $major = "CS";

    public $p = "hello"; //properties

    public function greet() //method
    {
        echo "Hello World";
    }
    public function info()
    {
        echo $this->greet();
        echo $this->name . " -" . $this->age . "-" . $this->major;
    }
}

$student = new Student(); //object instantiation

echo $student->greet();

//declare class 
//object 
//instantiation
//methods 
//properties


