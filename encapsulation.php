<?php 

class Student
{
    private $name = "John Doe";
    private $age = 21;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function setAge($age)
    {
        return $this->name = $age;
    }
    
}

$student = new Student();

 $result = $student->setName("Mary Jame");
$age = $student->setAge(17);
// echo $result;
//  echo $age;
//  var_dump($student);
// $student->name = "Hla Hla";
// $student->age = 19;

// echo $student->name;
// echo $student->age;

class Car 
{
    protected $wheels = "4";
    protected $gear = "Manual";
    protected $model = "Mercedes";
}

class SportCar extends Car
{
    public $mode = "sport mode";
    public function carInfo()
    {
        return $this->wheels . " " . $this->gear . " " . $this->model;
    }
   
}

$sportCar = new SportCar();
// echo $sportCar->wheels;
// echo "<pre/ >";
// echo $sportCar->gear;
// echo "<pre/ >";
// echo $sportCar->model;
// echo "<pre/ >";
echo $sportCar->carInfo();
echo "<pre/ >";


