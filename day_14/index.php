<?php

require_once "app/classes/HelloWorld.php";
use App\classes\HelloWorld;

/*for($X=0;$X<10;$X++)
{
    if($X<9)
    {
        echo "Hello, ";
    }
    else{
        echo"Hello.";
    }
}*/
$x =10;
do{
echo $x;
$x--;
}while($x>-1);
