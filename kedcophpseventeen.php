<!DOCTYPE html>
<html>
<head>
	<title></title>

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

</head>
<body class="mybody">
	<fieldset class="myfieldset">
		<h1>Question 17</h1>
		<p>WAP to find whether a number is positive or not.</p><hr>

		<form>
			<label for="number">Input a number: </label>
			<input type="number" name="number"><br><br>

			<button type="submit" name="submit">Submit</button>
		</form>

		<?php
            if(isset($_GET['submit'])){
            	$number = $_GET['number'];
            	if ($number < 0) {
            		echo $number." is a negative number!";
            	}
            	else
            		echo $number." is a positive number!";
            }
		?>
	</fieldset>


   <button class="nextbutton"><a href="kedcophp16.php">Previous</a></button>
    <button class="nextbutton"><a href="kedcophp18.php">Next</a></button>
</body>
</html>