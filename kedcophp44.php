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
  <h1>Question 44</h1>
    <p>WAP to check whether the entered number is Palindrome or not.</p><hr>
   
    <form method="POST">
    <label for="n">Enter N: </label>
    <input type="number" name="n"><br><br>

    <button type="submit" name="submit">submit</button><br>
  </form>

    <?php
        if(isset($_POST['submit'])){
        $n = $_POST['n'];
        function palindrome_function($n){
          $reverse=strrev($n);
          if ($reverse==$n) {
            echo "true"; 
          }
          else
            echo "false"; 
        }
        palindrome_function($n);
       }
    ?>
</fieldset>
<button class="nextbutton"><a href="kedcophp43.php">Previous</a></button>
<button class="nextbutton"><a href="kedcophp45.php">Next</a></button>
</body>
</html>

 

 