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
  	  <h1>Question 22</h1>
  	  <p>WAP to find the eligibility of admission for a professional course based on the following criteria:
          <ol type="i">
          	<li>Jamb >= 180</li>
          	<li>Post utme >=170</li>
          </ol>
  	  </p><hr>

  	  <form>
  	  	<label for="Jamb">Enter Jamb score</label>
  	  	<input type="number" name="Jamb"><br><br>

        <label for="utme">Enter Utme score</label>
  	  	<input type="number" name="utme"><br>
  	  	<br>

  	  	<button type="submit" name="submit">Submit Scores</button>
  	  </form><br>

  	  <?php
  	     if(isset($_GET['submit'])){
  	     	$Jamb = $_GET['Jamb'];
  	     	$utme = $_GET['utme'];

  	     	if ($Jamb>=180 && $utme>=170) {
  	     		echo "You've been granted admission to study Information Technology!";
  	     	}
             
  	     	
  	     	else
  	     		echo "You are not qualified for the admission to study Information Technology!";
  	     }
  	  ?>
  </fieldset>


<button class="nextbutton"><a href="kedcophp21.php">Previous</a></button>
    <button class="nextbutton"><a href="kedcophp23.php">Next</a></button>
</body>
</html>