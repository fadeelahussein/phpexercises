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
  <h1>Question 15</h1>
    <p>WAP to accept the height of a person in centimeter and categorize the person according to their height.</p><hr>
   
    <form method="POST">
    <label for="centimeter">Enter your height in centimeter: </label>
    <input type="text" name="centimeter"><br><br>

    <button type="submit" name="submit">submit</button><br>
  </form>

    <?php
        if(isset($_POST['submit'])){
        $centimeter = $_POST['centimeter'];
        $foot= $centimeter*0.0328084;
         
        echo  "You are ".$foot." feet tall";

  
       }
    ?>
</fieldset>
<button class="nextbutton"><a href="kedcophp14.php">Previous</a></button>
<button class="nextbutton"><a href="kedcophp16.php">Next</a></button>
</body>
</html>

 

 