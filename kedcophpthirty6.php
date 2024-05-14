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
  <h1>Question 36</h1>
    <p>WAP to print factorial of a no
        <ol type="i">
          <li>Using for loop</li>
          <li>Using while loop</li>
        </ol>
    </p><hr>
   
    <form method="POST">
    <label for="n">Enter N: </label>
    <input type="text" name="n"><br><br>

    <button type="submit" name="submit">submit</button><br>
  </form>

    <?php
        if(isset($_POST['submit'])){
        $n = $_POST['n'];
        $factorial= 1;
        // for($i = 1; $i<=$n; $i++){
          // $factorial = $factorial * $i;

        //}
        //echo "Factorial of ".$n." is ".$factorial;
     echo "<br>";

         $i=1;
      while($i<=$n){
         $factorial = $factorial * $i;
          $i++;

          }
          echo "Factorial of ".$n." is ".$factorial; 
      }
      
       
      

    ?>
      
</fieldset>
<button class="nextbutton"><a href="kedcophp35.php">Previous</a></button>
<button class="nextbutton"><a href="kedcophp37.php">Next</a></button>
</body>
</html>

 

 