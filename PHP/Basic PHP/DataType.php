<?php
/* echo("PHP supports ten primitive types.");

    Four scalar types:
   1. Boolean
   2. integer
   3. float (floating-point number, aka double)
   4. string

    Four compound types:
   1. array
   2. object
   3. callable
   4. iterable

    Two special types:
   1. resource
   2. NULL 
   
   */

//Boolean
$alive = true;
echo gettype($alive);
echo "<br/>";
//Integer
$int = 5;
echo gettype($int);
echo"<br/>";
//Float
$float = 5.20;
echo gettype($float);
echo"<br/>";
//String
$str = "Hi Siam";
echo gettype($str);
echo "<br/>";

//Array
$name = array("Siam", "Shaeed", "Redwan");
echo("My Name is : " . $name[0]);
echo("<br/>");
//Object
class foo{
    function do_foo(){
        echo("Doing foo");
    }
}
$bar = new foo;
$bar->do_foo();

