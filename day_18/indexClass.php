<?php

// for($i = 1;$i<=10;$i++)
// {
    
    // if($i%2!=0)
    // {
    //     echo'<br>';
    // }
    // else{
    //     echo $i.", ".$i-1;
    // }
//}


$person = [
    'name'=>'Ismail',
    'age'=>'30',
    'profession'=>'Software Engineer',
    'blood'=>'O+',
    'gender'=>'male',
    'merital'=>'single'
];

$justkeys = array_keys($person);
echo"<pre>";
//print_r($justkeys);
$final=count($justkeys);
for($i=0;$i<$final;$i++)
{
    if($i==$final-1){
        echo $justkeys[$i]."=>".$person[$justkeys[$i]];
    }
    else{
        echo $justkeys[$i]."=>".$person[$justkeys[$i]].",<br>";
    }
}
// foreach($person as $key=>$values)
// {
    
    
//     if($key != "gender")
//     {
//         echo $key."=>".$values.",<br>";
        
//     }
//     else{
//         echo $key."=>".$values;
//     }
    
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

    

