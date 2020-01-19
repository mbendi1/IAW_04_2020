<?php
//declare variables PHP and set to  empty values

//define your functions here

//catching the action method and vars from request here
if($_SERVER["REQUEST_METHOD"]=="POST"){
   //asign value to variables here
   //call the functions you need here
  //write your code here
 }

 ?>
<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

    <h2>Registration Form</h2>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
		First name:
        <input type="text" name="firstname"> <br>
		Last name:
        <input type="text" name="lastname">
		User:
		<input type="text" name="user"> <br>
		Password:
        <input type="text" name="pass">


        <input type="submit" value="Submit">

    </form>
</body>
</html>
