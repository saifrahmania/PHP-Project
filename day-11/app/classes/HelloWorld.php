<?php


namespace App\classes;


class HelloWorld
{
    public $ourText;
    public function __construct()
    {
        $this->ourText ="Hello World";
    }
    public function one(){
        echo $this->ourText;
    }
}