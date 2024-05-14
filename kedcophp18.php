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
        <h1>Question 14</h1>
        <p>WAP to accept two integers and check whether they are equal or not.</p><hr>

        <form>
            <label for="number">Input two number: </label><br>
            <input type="number" name="number1"><br><br>
            <input type="number" name="number2"><br>

            <button type="submit" name="submit">Submit</button>
        </form>

           <?php
            if(isset($_GET['submit'])){
              $number1 = $_GET['number1'];
              $number2 = $_GET['number2'];

              if($number1 == $number2){
                 echo $number1." is equal to ".$number2;
               }
              else
                 echo $number1." is not equal to ".$number2;

        }
           ?>
       </fieldset> 

       <button class="nextbutton"><a href="kedcophp13.php">Previous</a></button>
    <button class="nextbutton"><a href="kedcophp15.php">Next</a></button>
</body>
</html>