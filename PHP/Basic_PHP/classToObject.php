<?php
    class SimpleClass{
       public  $name = "Abdul Alim";
       public $age = 25;
       public $address = "Mirpur";

    //    Function Start
       public function Contact(){
        $n = $this->name;
        $a = $this->age;
        $ad = $this->address;
    
        return "Name:" . $n  .  "<br>Age: " . $a . "<br>Address: " . $ad . "<hr>";
       }
    }
    $objectHandler = new SimpleClass;
    echo $objectHandler->Contact();

    //  New Obj
    $object2 = new SimpleClass;
    $object2->name = "Sakib Mahmud";
    $object2->age = "22";
    $object2->address = "Dhanmondi";

    echo $object2->Contact();

    //New Obj
 $newObj = new SimpleClass;
 $newObj->name="Siam";
 $newObj->age="25";
 $newObj->address="Kurigram";
 echo $newObj->Contact();
 
?>