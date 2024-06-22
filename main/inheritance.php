<?php 

class Student 
{
    public function read()
    {
        echo "This is Read Method";
    }

    public function play()
    {
        echo "This is Play Method";
    }

    public function rest()
    {
        echo "This is Rest Method";
    }
}

class UniStudent extends Student 
{
    public function game()
    {
        echo "This is Game Method";
    }
}

$student = new UniStudent();
$student->name;
echo $student->name;
