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
		<h1>Question 24</h1>
		<p>WAP to show the use of <strong>conditional operator</strong> (Greater among two numbers)</p><hr>

		<form>
			<label for="num1">Num 1</label>
			<input type="number" name="num1"><br><br>
			<label for="num2">Num 2</label>
			<input type="number" name="num2"><br><br>

			<button type="submit" name="submit">Submit</button><br>

              <?php
              if(isset($_GET['submit'])){
              	$num1 = $_GET['num1'];
              	$num2 = $_GET['num2'];
              	$result;

              	$result = ($num1 > $num2) ? $num1 : $num2;

              	echo $result;

              	}
              ?>
            
		</form>
	</fieldset>
	<button class="nextbutton"><a href="kedcophp23.php">Previous</a></button>
    <button class="nextbutton"><a href="kedcophp25.php">Next</a></button>

</body>
</html>