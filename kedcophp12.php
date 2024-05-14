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

		<h1>Question 12</h1>
		<p><h4>WAP to calculate the Gross Salary of an employee. Assume Gross Salary=Basic Salary+DA+HRA<br>DA = 40% of Basic Salary<br>HRA = 20% of Basic Salary.</h4></p><hr>

	<form action="" method="GET">

 	<label for="salary">Enter Your Basic Salary: </label>
 	<input type="number" name="salary"><br><br>

 	<button name="calculate">Calculate</button><br><br>

    <?php 
     if(isset($_GET['calculate'])){
     	$basicSalary = $_GET['salary'];
     	$percentage1 = $basicSalary*(40/100);
     	$percentage2 = $basicSalary*(20/100);
     	
     	$DA=$percentage1;
     	$HRA=$percentage2;

     	$grossSalary = $basicSalary + $DA + $HRA;

     	
     	echo "Your DA is ".$DA."<br>";
     	echo "Your HRA is ".$HRA."<br>";

     	echo "Your Gross Salary is ".$grossSalary;
     }

    ?>
 </form>
</fieldset>
<button class="nextbutton"><a href="kedcophp11.php">Previous</a></button>
<button class="nextbutton"><a href="kedcophp13.php">Next</a></button>

</body>
</html>