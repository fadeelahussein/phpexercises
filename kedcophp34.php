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
  <h1>Question 34</h1>
    <p>WAP to print even numbers out of first 100 numbers.
        
    </p><hr>
   
    
    <?php 
        for ($i=0; $i <=100 ; $i++) { 
          if ($i%2==0) {
              echo $i;
          }
           echo " ";
        }
    
    ?>
</fieldset>
<button class="nextbutton"><a href="kedcophp33.php">Previous</a></button>
<button class="nextbutton"><a href="kedcophp35.php">Next</a></button>
</body>
</html>

 
