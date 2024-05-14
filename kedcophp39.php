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
  <h1>Question 39</h1>
    <p>WAP to print the product and average first N natural numbers.</h4></p><hr>
   
    <form method="POST">
    <label for="n">Enter N: </label>
    <input type="text" name="n"><br><br>

    <button type="submit" name="submit">submit</button><br>
  </form>

    <?php
        if(isset($_POST['submit'])){
        $n = $_POST['n'];
        $product= 1;
         for($i = 1; $i<=$n; $i++){
           $product = $product * $i;

        }
        echo  "The product of the first N natural numbers is ".$product;

        $average = $n;
        $sum = 0;
        for($i = 1; $i<=$n; $i++){
            $sum = $sum + $i;
           $average = $sum/$n;
      }
         echo "<br> The average of the first N natural numbers is ".$average;
       }
    ?>
</fieldset>
<button class="nextbutton"><a href="kedcophp38.php">Previous</a></button>
<button class="nextbutton"><a href="kedcophp40.php">Next</a></button>
</body>
</html>

 

 