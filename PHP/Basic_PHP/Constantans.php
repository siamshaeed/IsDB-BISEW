<?php
 //Constans can't be change value.
 /*Two type on constant use
    1. define()
    2. const keyword
 */
    define('SIAM', 42);
    echo SIAM;

    echo '<br/>';

    const Siam = 50;
    echo Siam;

    //Constants do not follow any scoping rules.
    /*They can be defined and accessed from anywhere.
        Constans > Global.
         Variable > Global, Local, Static.
    */
?>