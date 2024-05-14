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
  <h1>Question 37</h1>
    <p>WAP to print the sum of the following series:
          <br>
          1+1/4+1/7+1/10+1/13+1/16+1/19+1/22+1/25.
    </p><hr>
   
    
    <?php
       $num = 1+1/4+1/7+1/10+1/13+1/16+1/19+1/22+1/25;
       $sum = $num;
       echo "The sum of the following series is ".$sum;
        
      
       
    ?>
</fieldset>
<button class="nextbutton"><a href="kedcophp36.php">Previous</a></button>
<button class="nextbutton"><a href="kedcophp38.php">Next</a></button>
</body>
</html>

 

 