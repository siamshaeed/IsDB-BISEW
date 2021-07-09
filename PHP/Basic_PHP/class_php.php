<?php
/*
// Structure in class
class myClass
{   
    //This called property in class
    public $name = "Siam";
    protected $dept = "CSE";
    private $id = "105406";

    //This called method in class
    function country()
    {
        echo "Hellow Bnagladesh";
    }

    function district()
    {
        echo "Hellow kurigram";
    }
}
// Here make object
$obj_my = new myClass();
echo $obj_my -> name;
echo "<br>";
echo $obj_my -> country();
echo "<br>";
echo $obj_my -> district();
*/
?>

<?php
class student
{
    public $name = "Siam";
    protected $dept = "CSE";
    private $id = "42";

    public function myclass()
    {
        echo $this->name;
    }
    protected function phone()
    {
        $phone = "01787972797";
    }
    private function mail()
    {
        $mail = "siamshaeed@gmail.com";
    }
}
$obj_new = new student();
$obj_new->myclass();
?>

