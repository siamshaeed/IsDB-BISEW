<?php
    #An array is a data structure that stores one or more similar type of values in a single value.
    // 3 type of array :

    /*1. indexed Array
      2. Associative Array
      3. Numeric Array*/

      echo "<h2>Indexed/Numeric Array</h2>";
    //First method to create array.
      $people = array("Siam", "Shakil", "Maruf", "Ruhul");
      var_dump($people);
      echo"<br> <br>";

     //Second method to create array.
      $studentName[0] = "Siam";
      $studentName[1] = "Tanim";
      $studentName[2] = "Ismail";
      $studentName[3] = "Ruhul";
      echo "<b>Display array data :</b>" . $studentName[1];
      echo "<br> <br>";
    // chack array debuging function
      print_r($studentName);
      echo"<br> <br>";
    //Chack var_dump 
      var_dump($studentName);
      echo"<br> <br>";

      echo "<h2>Associative Array</h2>";
      /* First method to associate create array. */
      $salaries = array("mohammad" => 2000, "qadir" => 1000, "zara" => 500);
      
      echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
      echo "Salary of qadir is ".  $salaries['qadir']. "<br />";
      echo "Salary of zara is ".  $salaries['zara']. "<br />";
      
      /* Second method to create array. */
      $salaries['mohammad'] = "high";
      $salaries['qadir'] = "medium";
      $salaries['zara'] = "low";
      
      echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
      echo "Salary of qadir is ".  $salaries['qadir']. "<br />";
      echo "Salary of zara is ".  $salaries['zara']. "<br />";
      ?>
      
      ?>
