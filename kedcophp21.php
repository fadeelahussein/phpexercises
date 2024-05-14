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
		<h1>Question 21</h1>
	    <p>WAP to accept a grade and declare the equivalent description.</p><hr>
		<form>
			<label for="grade">Enter your grade: </label>
			<input type="text" name="grade"><br><br>
			<button type="submit" name="submit">Submit</button>
		</form><br>

		<?php 
		   if(isset($_GET['submit'])){
		   	$grade = $_GET['grade'];

		   	if ($grade == 'A') {
		   		echo "Excellent!";
		   	}
		   	elseif ($grade == 'B') {
		   		echo "Very Good!";
		   	}
		   	elseif ($grade == 'C') {
		   		echo "Good!";
		   	}
		   	elseif ($grade == 'D') {
		   		echo "Average!";
		   	}
		   	elseif ($grade == 'E') {
		   		echo "Pass!";
		   	}
		   	elseif ($grade == 'F') {
		   		echo "Fail!";
		   	}
		   	else
		   		echo "Invalid!";
		   }
		?>
	</fieldset>


  <button class="nextbutton"><a href="kedcophp20.php">Previous</a></button>
    <button class="nextbutton"><a href="kedcophp22.php">Next</a></button>
</body>
</html>