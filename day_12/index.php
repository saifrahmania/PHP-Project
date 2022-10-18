<?php
require_once "vendor/autoload.php";
//require_once "app/classes/HelloWorld.php";
use App\classes\HelloWorld;
$myText = new HelloWorld();
//$myText->one();
// $fname="md saifur";
// $lname="rahman";
// $name =$fname;
// echo "My name is {$name} {$lname}"."and I am {$age} old";
$a = 40;
$b = 30;
$c = $a +$b;
$c+=5;
//echo $c;
if($a>$b){
    echo "a is the big bro";
}
else{
    echo "b is the big bro";
}

