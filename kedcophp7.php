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
		<h1>Question 7</h1>
		<p><h4>WAP to calculate</h4>
         <ol type="i">
         	<li>(a+b)<sup>2</sup></li>
         	<li>(a+b)<sup>3</sup></li>
         	<li>(a<sup>2</sup>-b<sup>2</sup>)</li>
         </ol>
		</p><hr>

		<form>
			<label>Input a & b:</label><br>
			<input type="number" name="ainput" placeholder="Input for a"><br>
			<input type="number" name="binput" placeholder="Input for b"><br><br>

			<button type="submit" name="submit">Submit</button>
		</form>

		<?php
           if(isset($_GET['submit'])){
           	$ainput= $_GET['ainput'];
           	$binput= $_GET['binput'];

           	$solution1 = ($ainput + $binput)**2;
           	$solution2 = ($ainput + $binput)**3;
           	$solution3 = ($ainput^2 - $binput**2);

           	echo "The answer to i. is ".$solution1."<br>";
           	echo "The answer to ii. is ".$solution2."<br>";
           	echo "The answer to iii. is ".$solution3."<br>";
           }
		?>
	</fieldset>
<button class="nextbutton"><a href="kedcophp6.php">Previous</a></button>
   <button class="nextbutton"><a href="kedcophp8.php">Next</a></button>
</body>
</html>