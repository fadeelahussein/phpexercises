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
  	<h1>Question 4</h1>
  	<p><h4>WAP to print the area of a Circle, Rectangle & a Square.</h4></p><hr>
  	<form method="POST">
  		<label for="radius">Radius</label>
  		<input type="number" name="radius"><br><br>
  		<label for="Length">Length</label>
  		<input type="number" name="Length"><br><br>
  		<label for="width">Width</label>
  		<input type="number" name="width"><br><br>

  		<button type="submit" name="submit">Submit</button><br>
  	</form>
     
  
  <?php
       if(isset($_POST['submit'])){
       	$radius = $_POST['radius'];
       	$Length = $_POST['Length'];
       	$width = $_POST['width'];

       	$const = 3.14;
       	$Circle = $const *($radius*$radius);
       	echo "The Area of a Circle Pi*(r*r) is S".$Circle."<br>";

       	$Rectangle = $Length * $width;
     	echo "The Area of a Rectangle Length * Width ".$Rectangle."<br>";

     	$Square = $Length*$Length;
     	echo "The Area of a Square Length^2 is ".$Square."<br>";
       }
     	
     

  ?>
  </fieldset>
   <button class="nextbutton"><a href="kedcophp3.php">Previous</a></button>
   <button class="nextbutton"><a href="kedcophp5.php">Next</a></button>
</body>
</html>