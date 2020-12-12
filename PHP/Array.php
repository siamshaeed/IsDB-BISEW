<?php
    #Array - Variable that hold multiple value.

    // 3 type of array :
    // 1. indexed Array
    // 2. Associative Array
    // 3. Numeric Array

    echo "<h2>Indexed/Numeric Array</h2>";
    $people = array("Siam", "Shakil", "Maruf", "Ruhul");
    var_dump($people);


    echo"<br> <br>";
    $studentName[0] = "Siam";
    $studentName[1] = "Tanim";
    $studentName[2] = "Ismail";
    $studentName[3] = "Ruhul";
    echo "<b>Display array data :</b>" . $studentName[1];
    echo "<br>";
    // chack array debuging function
    print_r($studentName);
    echo"<br> <br>";
    //Chack var_dump 
    var_dump($studentName);
    echo"<br> <br>";
?>
