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
            margin-left: 5px;

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
	<h1>Question 25</h1>
	<p>WAP to check whether the given number is even or odd (By using <strong>conditional operator</strong>).</p><hr>

	<form method="POST">
		<label for="num">Enter number: </label>
		<input type="number" name="num"><br><br>
	
		<button type="submit" name="submit">Submit</button><br>

		<?php
		if(isset($_POST['submit'])){
			$num = $_POST['num'];
			$result;
	
			$result = ($num % 2 ==0)? "even":  "odd";	
			echo $result;
		}
		?>
	</form>
	
</fieldset>
    <button class="nextbutton"><a href="kedcophp24.php">Previous</a></button>
    <button class="nextbutton"><a href="kedcophp26.php">Next</a></button>
</body>
</html>