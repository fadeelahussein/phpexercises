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
		<h1>Question 13</h1>
		<p>WAP to read the age of a candidate and determine whether it is eligible for casting his/her own vote.</p><hr>

		<form>
			<label for="age">Enter Your age To check eligibility: </label>
			<input type="number" name="age"><br><br>
			<button type="submit" name="submit">Submit</button>
		</form>

		<?php

		   if(isset($_GET['submit'])){
		   	$age = $_GET['age'];

		   	if ($age<18 or $age>60) {
		   		echo "You are ineligible for voting!";
		   	}
		   	else {
		   		echo "You are eligible for voting!";
		   	}
		   }
		?>
	</fieldset>

      <button class="nextbutton"><a href="kedcophp12.php">Previous</a></button>
    <button class="nextbutton"><a href="kedcophp14.php">Next</a></button>
</body>
</html>