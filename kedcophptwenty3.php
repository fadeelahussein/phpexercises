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
		<h1>Question 23</h1>
		<p>WAP to calculate and print the Electricity bill of a given customer. The customer id, name, and unit consumed by the user should be taken from the keyboard and display the total amount to pay by the customer. the charges are as follows:<br>Cost of Energy (Unit) in kw = N22.5.</p><hr>

		<form>
			<label for="id">Customer Id</label>
			<input type="text" name="id"><br><br>

			<label for="name">Customer Name</label>
			<input type="text" name="name"><br><br>

			<label for="unit">Unit Consumed</label>
			<input type="number" name="unit"><br><br>

			<button type="submit" name="submit">Submit</button>
		</form><br><br>

		<?php
		   if(isset($_GET['submit'])){
		   	$id = $_GET['id'];
		   	$name = $_GET['name'];
		   	$unit = $_GET['unit'];

		   	$bill = $unit * 22.5;

		   	echo "User ".$id." Your bill is N".$bill;
		   }
		?>
	</fieldset>
    <button class="nextbutton"><a href="kedcophp22.php">Previous</a></button>
    <button class="nextbutton"><a href="kedcophp24.php">Next</a></button>
</body>
</html>