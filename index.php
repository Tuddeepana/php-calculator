<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action='' method="GET">
    <input type="text" name="num1" placeholder= "Number 1"><br><br>
    <input type="text" name="num2" placeholder= "Number 2"><br><br>



    <select name="operator">
    <option value="none">None</option>
    <option value="add">Add</option>
    <option value="sub">Subtraction</option>
    <option value="divide">Divide</option>
</select><br><br>


<button type='submit' name='submit'>Calculate</button>

</form>






<?php

    if(isset($_GET['submit'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        $operator = $_GET['operator'];


        //Display answer according the operator
        switch ($operator) {
            case "add":
                $adding = $num1 + $num2;
                echo "Answer is :" .($num1 + $num2);
                break;
            
            case "sub":
                $subtract = $num1-$num2;
                echo "Answer is :" .($num1 - $num2);
                break;



            case "divide":
                $divide = $num1 / $num2;
                echo "Answer is :" .($num1 / $num2);
                break;

                default:
                echo  "Please set the operator";
            
        }
        



    }







?>




    
</body>
</html>
