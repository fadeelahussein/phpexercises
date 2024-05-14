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
  <h1>Question 38</h1>
    <p>WAP to print the squares of 1<sup>st</sup> 10 natural numbers and their sum.
        
    </p><hr>
   
    
    <?php
    $square = 0;
        for ($i=1; $i <=10 ; $i++) { 
          $square = $square+($i *$i);
          echo $i*$i .",";
        }
        echo "<br>".$square;
    ?>
</fieldset>
<button class="nextbutton"><a href="kedcophp37.php">Previous</a></button>
<button class="nextbutton"><a href="kedcophp39.php">Next</a></button>
</body>
</html>

 
