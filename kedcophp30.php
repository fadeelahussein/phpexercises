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
    <p>WAP to display arithmetic operations using switch case statement.</p><hr>
   
    <form method="POST">
    
   <label for="Arithmetic">Arithmetic operation: </label>
   <input type="text" name="Arithmetic"><br><br>
    <button type="submit" name="submit">Display</button><br>
  </form>

    <?php
        if(isset($_POST['submit'])){
          $operation = $_POST['Arithmetic'];
           switch ($operation) {
             case 'multiplication':
               echo "*";
               break;
              case 'subtraction':
                 echo "-";
                 break; 
              case 'division':
                echo "/";
                break;
              case 'addition':
                echo "+";
                break;
              case 'modulus':
                echo "%";
                break;
            
             
             default:
               echo "None";
               break;
           }
        }
    ?>
</fieldset>
<button class="nextbutton"><a href="kedcophp35.php">Previous</a></button>
<button class="nextbutton"><a href="kedcophp37.php">Next</a></button>
</body>
</html>

 

 