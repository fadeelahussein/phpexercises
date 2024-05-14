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
  <h1>Question 33</h1>
    <p>WAP to print the first N natural numbers and their sum.</h4></p><hr>
   
    <form method="POST">
    <label for="n">Enter N: </label>
    <input type="text" name="n"><br><br>

    <button type="submit" name="submit">submit</button><br>
  </form>

    <?php
        if(isset($_POST['submit'])){
        $n = $_POST['n'];
        $sum= 0;
         for($i = 1; $i<=$n; $i++){
           $sum = $sum + $i;

           echo "$i <br/>";
        }
        echo  "The sum of the first N natural numbers is ".$sum;
      }
       
    ?>
</fieldset>
<button class="nextbutton"><a href="kedcophp32.php">Previous</a></button>
<button class="nextbutton"><a href="kedcophp34.php">Next</a></button>
</body>
</html>

 

 