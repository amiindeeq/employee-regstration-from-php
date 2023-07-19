<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  $fname =$_POST['fname'];
  $lname =$_POST['lname'];
  $gender =$_POST['gender'];
  $School =$_POST['School'];
  $Grade =$_POST['Grade'];

  echo "<span style = 'txt-align: center ;coloe:blue;' > form</span>";
  echo"</br>";
  echo"  <span fname is : style ='color:indigo'> $fname </span> <br>";
  echo " <span lname is  : style = 'color :pink'> $lname  </span><br>";
  echo "<span gender is  : style ='color: blue '>  $gender</span><br>";
  echo "<span School is  : style ='color: blue '>  $School</span><br>";
  echo "<span Grade is  : style ='color: Red '>  $Grade</span><br>";
  ?>
</body>
</html>