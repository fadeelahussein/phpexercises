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
  <h1>Question 35</h1>
    <p>WAP to print the following series:
          <ol type="i">
            <li>10,9,8,.....1</li>
            <li>2,4,6,8,.....20</li>
            <li>10,13.5,17,20.5</li>
          </ol>
    </p><hr>
   
    
    <?php
        echo "Answer to i. ";
         for($i = 10; $i>=1; $i--){
           
           echo "$i ,";
        }
         echo "<br>";
          echo "Answer to ii. ";
        for($i = 2; $i<=20; $i = $i + 2){
           

           echo "$i ,";
        }
         echo "<br>";
          echo "Answer to iii. ";
        for($i = 10; $i<=20.5; $i = $i + 3.5){
           

           echo "$i ,";
        }
        
      
       
    ?>
</fieldset>
<button class="nextbutton"><a href="kedcophp34.php">Previous</a></button>
<button class="nextbutton"><a href="kedcophp36.php">Next</a></button>
</body>
</html>

 

 