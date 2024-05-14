<!DOCTYPE html>
<html>
<head>
	
	<style type="text/css">
		.mybody{
			width: 80%;
			margin: 70px;
		}
		.myfieldset{
			margin-bottom: 10px;
			background-color: pink;
			border:solid white;

		}
		.nextbutton{
			padding: 8px;
			width: 70px;
			background-color: pink;
			border:none;
		}
		a{
			text-decoration: none;
			color: black;
			display: inline-block;
			font-size: 16px;
		}
	</style>
	<title></title>
</head>
<body class="mybody">
   
	
	<fieldset class="myfieldset">

		<h1>Question 1</h1>
		<p><h4>WAP to input 2 no's from the user & do their addition, subtraction, multiplication & division.</h4></p><hr>

		<form action="" method="GET">
 	<label for="num1">Enter a number: </label>
 	<input type="number" name="num1"><br><br>

 	<label for="num1">Enter a number: </label>
 	<input type="number" name="num2"><br><br>

    <button name="submit">Calculate</button>

 </form>

 <?php
   if(isset($_GET['submit'])){
   	$num1= $_GET['num1'];
   	$num2= $_GET['num2'];
   	
   	$addition=$num1 + $num2;
   	$subtraction=$num1-$num2;
   	$multiplication=$num1*$num2;
   	$division=$num1/$num2;

   	echo $num1."+".$num2." is equal to ".$addition."<br>";
   	echo $num1."-".$num2." is equal to ".$subtraction."<br>";
   	echo $num1."*".$num2." is equal to ".$multiplication."<br>";
   	echo $num1."/".$num2." is equal to ".$division."<br>";

   }
   
?>
</fieldset>
<button class="nextbutton"><a href="mainkedco.php">Back</a></button>
<button class="nextbutton"><a href="kedcophp2.php">Next</a></button>
</body>
</html>
