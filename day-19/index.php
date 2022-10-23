<?php
require_once './vendor/autoload.php';
use App\classes\HelloWorld;

$test = new HelloWorld();
$test->index();

    
    // if (isset($_POST['f_name'])) {
    //     echo $_POST['f_name']." " . $_POST['l_name'];
    // }

    // echo $_POST['l_name'];
?>

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM DATA</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="f_name" placeholder="Give Your First Name">
        <br>
        <br>
        <input type="text" name="l_name" placeholder="Give Your Last Name ">
        <br>
        <br>
        <input type="submit" value="Submit Your Data">
    </form>
</body>
</html> -->