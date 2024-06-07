<?php 

interface Developer
{
  public function input(); //abstract
}

class CsharpDev implements Developer
{
 public function input()
 {
    echo "This is C# Code";
 }

}

class PHPDev implements Developer
{
    public function input()
    {
       echo "This is PHP Code";
    }
}

class JSDev implements Developer
{
    public function input()
    {
       echo "This is JS Code";
    }
}

// for c# developer 
$csharpDev = new CsharpDev();
$csharpDev->input();
echo "<pre/>";

// for php developer 
$phpDev = new PHPDev();
$phpDev->input();
echo "<pre/>";

//for JS developer 
$jsDev = new JSDev();
$jsDev->input();
echo "<pre/>";


