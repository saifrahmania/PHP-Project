<?php
require_once "vendor/autoload.php";
use App\classes\HelloWorld;


$array = [];
$array['realmi']['model']='f1';
$array['realmi']['price']='8100';
$array['oppo']['model']='redmi';
$array['oppo']['price']='21000';



foreach ($array as $value){
    echo "<pre>";
    if($value['price']<=21000){
    print_r($value['model']);}
    echo"<pre>";
}

?>
