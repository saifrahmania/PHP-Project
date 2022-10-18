<?php

namespace App\classes;

class HelloWorld
{
    public $age = 61;
    public $profession = "web developer";
    public $familyMember = "5";
    public $numberOne = 13;
    public $numberTwo = 22;

    public function __construct(){

    }


    public function one()
    {
       // echo gettype($this->age);
        //echo $this->numberOne + $this->numberTwo;
        if($this->age>18 && $this->age<59){
            echo "it is  not a child";
        }
        else if($this->age>=59 && $this->age<79)
        {
            echo "this is an old man";
        }
        else {
            echo "this is a child";
        }



//        echo $this->age;
//        echo $this->profession;
//        echo $this->familyMember;
    }

}