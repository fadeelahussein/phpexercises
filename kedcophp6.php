<!DOCTYPE html>
<html>
<head>
	
	<title></title>

	<style>
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
</head>
<body class="mybody">


<fieldset class="myfieldset">
	<h1>Question 6</h1>
	<p><h4>WAP to find the average of 7 numbers.</h4></p><hr>

	<form method="POST">
		<label for="numbers">Enter 7 numbers:</label><br>
		<input type="number" name="num1" placeholder="Number 1">
		<input type="number" name="num2" placeholder="Number 2"><br>
		<input type="number" name="num3" placeholder="Number 3">
		<input type="number" name="num4" placeholder="Number 4"><br>
		<input type="number" name="num5" placeholder="Number 5">
		<input type="number" name="num6" placeholder="Number 6"><br>
		<input type="number" name="num7" placeholder="Number 7"><br><br>

		<button type="submit" name="submit">Submit</button>

		<?php
          if(isset($_POST['submit'])){
          	$num1 = $_POST['num1'];
          	$num2 = $_POST['num2'];
          	$num3 = $_POST['num3'];
          	$num4 = $_POST['num4'];
          	$num5 = $_POST['num5'];
          	$num6 = $_POST['num6'];
          	$num7 = $_POST['num7'];

          	$average = ($num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7)/7;

          	echo "The Average of the numbers entered is ".$average;
          }
		?>
	</form>
</fieldset>
<button class="nextbutton"><a href="kedcophp5.php">Previous</a></button>
   <button class="nextbutton"><a href="kedcophp7.php">Next</a></button>
</body>
</html>