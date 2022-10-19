<?php

//$arr = [];
//$arr['realmi']['model']='f1';
//$arr['realmi']['price']='8100';
//$arr['oppo']['model']='redmi';
//$arr['oppo']['price']='21000';
//$hhh = array_reverse($arr);
//echo"<pre>";
////print_r($arr);
//print_r($hhh);
//echo"<pre>";
?>
<!--<h1>-->
<!--    Text Checking-->
<!--</h1>-->
<!--<table border="2" cellpadding="5px">-->
<!--    <tr>-->
<!--        <th>Model</th>-->
<!--        <th>Price</th>-->
<!--    </tr>-->
<!--    --><?php
//    foreach($arr as $ar){
//        echo"
//        <tr>
//            <td>{$ar}</td>
//        </tr>";
//
//    }
//    ?>
<!---->
<!--</table>-->

<?php
//$numbers = [0,1,2,3,4];
// foreach ($numbers as $num){
//    echo $num, "<br>";
// }
//$aa = array_values($numbers);
//echo"<pre>";
////print_r($arr);
//print_r($aa);
//echo"<pre>";
// function functionName(){
//     //echo"Joy Bangla";
// }

//functionName();
//$associative = array("Saiful"=>"teacher","Sazzad"=>"teacher","Saifur"=>"Student","Sabbir"=>"CR");
//$values = array_keys($associative);
//echo"<pre>";
//print_r($values);
//print_r($associative);
//for($i=0; $i < count($values); ++$i) {
    //echo $values[$i] . ' ' . $associative[$values[$i]] . "\n";
//}
//echo"<br>";
//$keys = array_keys($associative);
//for($i=0; $i < count($keys); ++$i) {
    //echo $keys[$i] . ' ' . $associative[$keys[$i]] . "\n";
//}

// $myName = "Saifur Rahman";
// $myName = 24;
// //echo $myName;
// $rar=[
//         "f_name"=>[
//         "ff1_name"=>"Muhammad",
//         "ff2_name"=>"Saifur",
//         "middle_name"=>"Rahman",
//         "last_name"=>"Talukder"
//     ],
//     "l_name"=>"Nayeem"];
// //print_r($rar["f_name"]["ff1_name"]);
// print_r($rar["f_name"]["ff1_name"].". ".$rar["f_name"]["ff2_name"]." ".$rar["f_name"]["middle_name"]." ".$rar["f_name"]["last_name"]." ".$rar["l_name"]." ")


?>
<html>

<head>

//css

<style>

table

{

border-style:solid;

border-width:2px;

border-color:pink;

}

</style>

</head>

<body bgcolor="#EEFDEF">

<?php

$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("smart", $con);

 

$result = mysql_query("SELECT * FROM Form");

 

echo "<table border='1'>

<tr>

<th>Id</th>

<th>name</th>

<th>Mobile</th>

<th>email</th>

</tr>";

 

while($row = mysql_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['Id'] . "</td>";

  echo "<td>" . $row['name'] . "</td>";

  echo "<td>" . $row['Mobile'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

 

mysql_close($con);

?>

</body>

</html>