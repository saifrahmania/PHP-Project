<?php

namespace App\classes;
class HelloWorld
{
    public $ourText;
//    public $fname="md saifur";
//    public $lname="rahman";
//    public $name ;
    public $age;
    public $graduation;
    public $familyMembers;
    public function __construct(){
        $this->ourText="Hello World";
    }

    public function one(){

        echo $this->name =$fname.$lname;
        echo $this->age=" 24";
        echo $this->graduation=" CSE";
        echo $this->familyMembers=" 5";
    }
}

