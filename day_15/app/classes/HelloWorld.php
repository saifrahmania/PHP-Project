<?php
namespace App\classes;

class HelloWorld{
    
    public $number = 10;

    public function __construct()
    {
        
    }

    public function fib($number){
        if($number <=1)
        {
            return $number;
        }
        return fib($number-1) + fib($number-2);

    }

    


}