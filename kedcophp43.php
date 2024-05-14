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
  <h1>Question 43</h1>
    <p>WAP to accept a 3 digit number from the user and print it reverse.</p><hr>
   
    <form method="POST">
    <label for="n">Enter N: </label>
    <input type="number" name="n"><br><br>

    <button type="submit" name="submit">submit</button><br>
  </form>

    <?php
        if(isset($_POST['submit'])){
        $n = $_POST['n'];
        $lgt=strlen($n);
        
          $reverse=strrev($n);
          echo $reverse;

       }
    ?>
</fieldset>
<button class="nextbutton"><a href="kedcophp42.php">Previous</a></button>
<button class="nextbutton"><a href="kedcophp44.php">Next</a></button>
</body>
</html>

 

 