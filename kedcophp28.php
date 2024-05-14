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

		<h1>Question 28</h1>
		<p>WAP to calculate the Gross Salary of an employee.<br> Assume: <hr>
             <table border="1">
                 <thead>
                     <th>BASIC SALARY</th>
                     <th>DA</th>
                     <th>HRA</th>
                 </thead>

                 <tbody>
                     <tr>
                         <td><1500</td>
                         <td>90% of Basic Salary</td>
                         <td>10% of Basic Salary</td>
                     </tr>

                     <tr>
                         <td>>=1500</td>
                         <td>98% of Basic Salary</td>
                         <td>500</td>
                     </tr>
                 </tbody>
             </table>
        </p><hr>

	<form action="" method="GET">

 	<label for="salary">Enter Your Basic Salary: </label>
 	<input type="number" name="salary"><br><br>

 	<button name="calculate">Calculate</button><br><br>

    <?php 
     if(isset($_GET['calculate'])){
     	$basicSalary = $_GET['salary'];
     	$dpercentage1 = $basicSalary*(90/100);
     	$dpercentage2 = $basicSalary*(98/100);

        $hpercentage1 = $basicSalary*(10/100);
        $hpercentage2 = 500;
     	
     	$DA1=$dpercentage1;
     	$DA2=$dpercentage2;

        $HRA1 = $hpercentage1;
        $HRA2 = $hpercentage2;

        if($basicSalary < 1500){
           $grossSalary = $basicSalary + $DA1 + $HRA1;
           echo "Your Gross Salary is ".$grossSalary;
         }
        elseif($basicSalary >= 1500){
            $grossSalary = $basicSalary + $DA2 + $HRA2;
            echo "Your Gross Salary is ".$grossSalary;
        } 
        else
            echo "none";
    }

    ?>
 </form>
</fieldset>
<button class="nextbutton"><a href="kedcophp27.php">Previous</a></button>
<button class="nextbutton"><a href="kedcophp29.php">Next</a></button>

</body>
</html>