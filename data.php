<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $FullName = $_POST['FulltName'];
    $EmpAddress = $_POST['EmpAddress'];
   $Email = $_POST['Email'];
    $Gender = $_POST['Gender'];
    $Contact = $_POST['Contact'];
   
    echo "FullName is : $FullName <br>";
    echo " EmpAddress is : $EmpAddress <br>";
    echo "Email is : $Email <br>";
    echo "Gender is : $Gender <br>";
    echo "Contact is : $Contact <br>";
    ?>
</body>
</html>