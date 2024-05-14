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

   <!--<div class="dropdown show">
    	<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Questions</a>
    	<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    		<a class="dropdown-item" href="kedcophp.php">Question 1</a>
    		<a class="dropdown-item" href="kedcophp2.php">Question 2</a>
    		<a class="dropdown-item" href="kedcophp3.php">Question 3</a>
    		<a class="dropdown-item" href="kedcophp4.php">Question 4</a>
    		<a class="dropdown-item" href="kedcophp5.php">Question 5</a>
    		<a class="dropdown-item" href="kedcophp6.php">Question 6</a>

    	</div>
    </div> -->

<body class="mybody">
   
 <fieldset class="myfieldset">
 	<h1>Question 9</h1>
 <p>WAP to convert temperature from degree Celsius to Fahrenheit & vice-versa. Using the formula : F = 9C/5 + 32.</p>
 <hr>

 <form>
 	<label for="Celsius">Convert Celsius to Fahrenheit</label>
 	<input type="number" name="Celsius"><br><br>
 	<button type="submit" name="Calculate">Calculate</button><br><br>

 	<?php
    if(isset($_GET['Calculate'])){
    	$Celsius = $_GET['Celsius'];
    	

    	$convertToFahrenheit = ((9*$Celsius)/5)+32;
    	

    	echo $Celsius." Celsius To Fahrenheit is ".$convertToFahrenheit."<br>";
    	
    }
    ?>
     <br>
 	<label for="Fahrenheit"> Convert Fahrenheit to Celsius</label>
 	<input type="number" name="Fahrenheit"><br><br>
 	<button type="submit" name="Calculate1">Calculate1</button><br><br>

 	<?php
    if(isset($_GET['Calculate1'])){
    	
    	$Fahrenheit = $_GET['Fahrenheit'];

    	
    	$convertToCelsius = (($Fahrenheit-32)*5)/9;

    	
    	echo $Fahrenheit." Fahrenheit To Celsius is ".$convertToCelsius;
    }
    ?>

 </form>

    

 </fieldset>
 <button class="nextbutton"><a href="kedcophp8.php">Previous</a></button>
    <button class="nextbutton"><a href="kedcophp10.php">Next</a></button>
</body>
</html>