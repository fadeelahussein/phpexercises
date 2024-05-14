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
   	   <h1>Question 14</h1>
   	   <p>WAP to read the value of an integer m and display the value of n is 1 when m is larger than 0, 0 when m is 0 and -1 when m is lessthan 0.</p><hr>

   	   <form>
   	   	<label for="m">Enter the value for m: </label>
   	   	<input type="number" name="m"><br><br>

   	   	<button type="submit" name="submit">Submit</button>
   	   </form>

   	   <?php
   	     if(isset($_GET['submit'])){
   	     	$m = $_GET['m'];

   	     	if ($m > 0) {
   	     		echo "n is 1";
   	     	}
   	     	elseif ($m ==0) {
   	     		echo "0";
   	     	}
   	        elseif ($m < 0) {
   	        	echo "m is -1";
   	        }
   	     }
   	   ?>
   </fieldset>
    <button class="nextbutton"><a href="kedcophp13.php">Previous</a></button>
    <button class="nextbutton"><a href="kedcophp15.php">Next</a></button>
</body>
</html>