<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excersice</title>

</head>
<body>
<?php
    <div class = "container-md">
        <h2 class"display-6 text-center">Employee Resistration system</h2>
        <p class"lead text-center ">Registration form</p>
    </div>
    <form action="data.php" method = "POST">
        EmployeeFullName:
        <br> <input type="text" name="FullName" placeholder="Enter YOUR fullname">
        <br><br>
        EmpAdrress: 
        <br><input type="text" name="EmpAdrress" placeholder="Enter Your Adrress">
        <br><br>
        Email: 
        <br><input type="email" name="Email" placeholder="Enter Your Email">
        <br><br>
        Gender:
        <br> <input type="checkbox" name="Male" id="male" >male
                <input type="checkbox" name="Female" id="male" >female
                <br><br>
        Contact: 
        <br><input type="number" name="Contact" placeholder="Enter YOUR Contact">
        <br><br>
        <p>
            <button type = "submit" name = "submit">Regester</button>
        </p>
    </form>
    ?>
</body>
</html>