<?php

require_once "vendor/autoload.php";
use App\classes\HelloWorld;



//$myText = new HelloWorld();
//$myText->fib(10);
//echo $this->myText;

function fibonacci($number){
    if($number<=1){
        return $number;
    }
    return fibonacci($number-1)+fibonacci($number-2);
}

for($i = 0;$i<100;$i++){
    echo fibonacci($i)." ";
}

function sum(...$numbers){
    $a = 0;
    for($i = 0;$i<count($numbers);$i++){
        $a+=$numbers[$i];
    }
    //echo $a;
}

//echo sum(12,23,12,14,16,19,16);
for($i = 1;$i<=10000;$i++)
{
    //echo $i;
    //echo"<br>";
}
