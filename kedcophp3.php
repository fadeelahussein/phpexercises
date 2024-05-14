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
		<h1>Question 3</h1>
		<p><h4>WAP to input principal, rate, time & find the simple interest.</h4></p><hr>

		<form>
			<label>Principal</label>
			<input type="number" name="principal"><br><br>

			<label>Rate</label>
			<input type="number" name="rate"><br><br>

			<label>Time</label>
			<input type="number" name="time"><br><br>

			<button type="submit" name="submit">Calculate</button><br><br>

		</form>
         
         <?php 
             if(isset($_GET['submit'])){
             	$principal = $_GET['principal'];
             	$rate = $_GET['rate'];
             	$time = $_GET['time'];

             	$simpleInterest = $principal*(1+($rate*$time));
             	echo "The simple interest is ".$simpleInterest;
             }  
         ?>
	</fieldset>
   <button class="nextbutton"><a href="kedcophp2.php">Previous</a></button>
   <button class="nextbutton"><a href="kedcophp4.php">Next</a></button>
</body>
</html>