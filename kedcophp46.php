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
  <h1>Question 46</h1>
    <p>WAP to print prime numbers out of first 100 numbers.
        
    </p><hr>
   
    
    <?php 
        for ($i=2; $i <=100 ; $i++) { 
          if ($i%1==$i || $i%$i==1) {
               
          }
          echo $i;
          
        }
    
    ?>
</fieldset>
<button class="nextbutton"><a href="kedcophp45.php">Previous</a></button>
<button class="nextbutton"><a href="kedcophp47.php">Next</a></button>
</body>
</html>

 
