<?php
echo "<h2>Variable On PHP</h2>"
//Variable are simply use to store data, variable value can be change.
/*  1. Php variable start with a $sign
    2. Variable name must be start letter or underscore
    3. Can not be contain space.
    4. Variable are CASE-SENSITIVE
*/
    // Example : 1
    $name = "Shaeed Al Hasan Siam"; //String
    $Number = 42; //Number
    $Boolean = true; //Boolean
    $fruts =["Mango", "Banana", "Apple"]; //Array

    //For output
    echo 'Name : ' . $name . '<br/>' . 'Number : ' . $Number . '<br/>'. 'Boolean : ' . $Boolean;
    echo "<br/> <br/>";
    print ($fruts[2]);

    //Example : 2
    $firstNumber = 10;
    $secondNumber = 20;

    $totalNumber = $firstNumber + $secondNumber;
    echo ("Total Number : " . $totalNumber);
    echo '<br/> <br/>';
    //Example : 3
    $string = "IDB";
    $_Number = 46;

    $result = $string . $_Number;
    echo $result;
    //Here (.) DOT sign for Concatenation
    ?>

    
    


    
