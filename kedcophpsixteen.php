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
		<h1>Question 16</h1>
		<p>WAP to find whether a no. is even or odd.</p><hr>

		<form>
			<label for="number">Input a number: </label>
			<input type="number" name="number"><br><br>

			<button type="submit" name="submit">Submit</button>
		</form>

		<?php
            if(isset($_GET['submit'])){
            	$number = $_GET['number'];
            	if ($number % 2 == 0) {
            		echo $number." is an even number!";
            	}
            	else
            		echo $number." is an odd number!";
            }
		?>
	</fieldset>
   
   <button class="nextbutton"><a href="kedcophp15.php">Previous</a></button>
    <button class="nextbutton"><a href="kedcophp17.php">Next</a></button>
</body>
</html>