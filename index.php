<?php 

 require "encapsulation.php";

// require "inheritance.php";

interface Code 
{
    public function input();

}

class CsharpDev implements Code
{
    public function input(){
        echo "This is C# Code";
    }

}

class PHPDev implements Code
{
    public function input(){
        echo "This is PHP code";
    }
}

class JSDev implements Code
{
    public function input(){
        echo "This is Javascript Code";
    }
}


$CshaprDev = new CsharpDev();
$CshaprDev->input();
echo "<pre/>";


$PHPDev = new PHPDev();
$PHPDev->input();
echo "<pre/>";

$JSDev = new JSDev();
$JSDev->input();
echo "<pre/>";

// abstract 
abstract class Important
{
    public function open()
    {
        echo "Open Function ";
    }

    // public abstract function test();

}

class Important2 extends Important
{
    // public function test()
    // {
    //     echo "Test Function ";
    // }
    // public function close()
    // {
    //     echo "Close Function ";
    //     echo $this->open();
    // }
    public function close()
    {
        echo "hello";
    }
}

$im = new Important2();
$result = $im->close();
echo $result;


