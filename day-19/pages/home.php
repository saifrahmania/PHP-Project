<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
   <table align="center" border="1px">
       <tr align="center">
           <th>Id</th>
           <th>Name</th>
           <th>Email</th>
           <th>Mobile Number</th>
       </tr>
       <?php
        $students = $student->totalStudents();
        foreach ($students  as $student){
       ?>
       <tr align="center">
           <td><?php echo $student['id'] ?></td>
           <td><?php echo $student['name'] ?></td>
           <td><?php echo $student['email'] ?></td>
           <td><?php echo $student['mobile'] ?></td>
       </tr>
       <?php } ?>
   </table>
</body>
</html>
