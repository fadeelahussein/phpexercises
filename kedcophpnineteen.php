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
		<h1>Question 19</h1>
		<p>WAP to enter %age of a student & print whether he is PASS or FAIL.</p><hr>

		<form>
			<label for="number">Input : </label>
            <input type="percentage" name="percentage"><br><br>

            <button type="submit" name="submit">Submit</button>
		</form><br>

		<?php 
		   if(isset($_GET['submit'])){
		   	$percentage = $_GET['percentage'];

		   	if ($percentage < 40) {
		   		echo "FAIL";
		   	}
		   	else
		   		echo "PASS";
		   }
		?>
	</fieldset>
    

    <button class="nextbutton"><a href="kedcophp18.php">Previous</a></button>
    <button class="nextbutton"><a href="kedcophp20.php">Next</a></button>
</body>
</html>