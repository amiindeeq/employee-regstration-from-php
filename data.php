<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  $name =$_POST['name'];
  $phone =$_POST['phone'];
  $gender =$_POST['gender'];

  echo "<span style = 'txt-align: center ;coloe:blue;' > form</span>";
  echo"</br>";
  echo" employee name is : <span style ='color:indigo'> $name </span> <br>";
  echo " empolyee pone is:n<pan style = 'color :pink'> $phone  </pan><br>";
  echo "<span gender is  : style ='color: blue '>  $gender</span><br>";

  ?>
</body>
</html>