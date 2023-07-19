<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form</title>
</head>
<style>
		form {
			margin: 0 auto;
			width: 50%;
			text-align: center;
		}
    
		fieldset {
			border: 2px solid #ccc;
			padding: 20px;
			border-radius: 15px;
			margin-bottom: 10px;
		}
	</style>

<form action="midd.php" method ="post">
<fieldset>
  <legend>
    <h2>Tima Ade University</h2>
  </legend>

        <p>Online Registration</p>
<label for="">FirstName:</label>
<input type="text" name ="fname" > <br> <br>
 <label for="">LastName:</label>
 <input type="text" name="lname"> <br> <br> 
 <label for=""> gender:</label>
 <input type="radio" name="gender" > male
 <input type="radio" name="gender" > female<br> <br> 
 <label for="">School:</label>
 <input type="text" name="School"> <br> <br> 
 <label for="Grade"> Grade:</label>
 <select name="Grade" action ="midd.php" method = "post">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
 </select>
 </fieldset>

<input type="submit" value ="submit">
  </form>
  
 
</body>
</html>