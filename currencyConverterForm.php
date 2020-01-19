<?php
//declare variables PHP and set to  empty values
$amount_in_euros=$amount_in_pounds=0;
$rate=0.89;
//define your functions here
function convert_euros_to_pounds($param_euros, $param_rate){
  //funcion vars declaration
  $converted_amount = 0;
  //write your code here

   return $converted_amount;
 }
//catching the action method and vars from request here
if($_SERVER["REQUEST_METHOD"]=="POST"){
//asign value to variables here
//call the functions you need here
    //write your code here
    $amount_in_pounds = convert_euros_to_pounds($amount_in_euros, $rate);
 }

?>
<html>
<head>
<title>Currency converter</title>
<meta http-equiv="Content-Type" content="text/html;charset-UTF-8">
</head>
<body>
<h2>Currency converter</h2>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
EUROS:
<input type="text" name="amount_in_euros" value="<?php echo $amount_in_euros;?>"><br>
EXCHANGE RATE:
<input type="text" name="rate" value="<?php echo $rate;?>"><br>
POUNDS:
<input type="text" name="amount_in_pounds" value="<?php echo $amount_in_pounds;?>"><br>
<input type="submit" value="Submit">
</form>
</body>
</html>
