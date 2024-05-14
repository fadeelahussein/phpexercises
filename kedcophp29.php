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
  <h1>Question 29</h1>
    <p>WAP to display days of week i.e Monday to Sunday using switch-case statement.</h4></p><hr>
   
    <form method="POST">
    
   <label for="days">Enter day number: </label>
   <input type="text" name="day"><br><br>
    <button type="submit" name="submit">Display</button><br>
  </form>

    <?php
        if(isset($_POST['submit'])){
          $day = $_POST['day'];
           switch ($day) {
             case '1':
               echo "Monday";
               break;
              case '2':
                 echo "Tuesday";
                 break; 
              case '3':
                echo "Wednesday";
                break;
              case '4':
                echo "Thursday";
                break;
              case '5':
                echo "Friday";
                break;
              case '6':
                echo "Saturday";
                break;
              case '7':
                echo "Sunday";
                break;
             
             default:
               echo "None";
               break;
           }
        }
    ?>
</fieldset>
<button class="nextbutton"><a href="kedcophp28.php">Previous</a></button>
<button class="nextbutton"><a href="kedcophp30.php">Next</a></button>
</body>
</html>

 

 