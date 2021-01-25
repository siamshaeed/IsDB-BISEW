<?php
// Class definition
class greeting{
    // properties
    public $str = "Hello World!";
    
    // methods
    function show_greeting(){
        return $this->str;
    }
}
// Create object from class
$message = new greeting;
var_dump($message);
?>


<p>Example : 2</p>

<?php
/*
 class student{
function marks_calculation(){         
echo "Display marks";
}
}
$student1 = new student;
$student1->marks_calculation(); 
?>

<p>Example : 3</p>
<?php
class foo{
    function do_foo(){
        echo "Doing foo."; 
    }
}
$bar = new foo;
$bar->do_foo();
?>

<p>Example : 4</p>
<?php   
     class bike{  
          function model(){  
               $model_name = "Royal Enfield";  
               echo "Bike Model: " .$model_name;  
             }  
     }  
     $obj = new bike();  
     $obj -> model(); 
*/
?> 