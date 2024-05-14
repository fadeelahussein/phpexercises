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
	<h1>Question 26</h1>
	<p>WAP to print the largest of three numbers.</p><hr>

	<form method="POST">
		<label for="a">Enter a: </label>
		<input type="number" name="a"><br><br>
		<label for="b">Enter b: </label>
		<input type="number" name="b"><br>
		<br>
		<label for="c">Enter c: </label>
		<input type="number" name="c"><br>
		<br>
		<button type="submit" name="submit">Submit</button><br>

		<?php
		if(isset($_POST['submit'])){
			$a = $_POST['a'];
			$b = $_POST['b'];
			$c = $_POST['c'];

			if($a > $b && $a > $c){
			echo $a." is the largest";
		    }

		    elseif($b > $a && $b > $c ){
		    echo $b." is the largest";
		    }

		    else
		       echo $c." is the largest";

		}
		?>
	</form>
	
</fieldset>
    <button class="nextbutton"><a href="kedcophp25.php">Previous</a></button>
    <button class="nextbutton"><a href="kedcophp27.php">Next</a></button>
</body>
</html>