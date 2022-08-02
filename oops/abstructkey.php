<?php 
abstract class student{
    protected $name = "krishna gaihre";
   abstract function showname();
   abstract function showage();
//    abstract function showdetails($name,$age);
   
   function showdetails($clz){
    //    echo "this is non abstruct method";
    echo "my school name is $clz";
   } 
}

class Teacher extends student{
    function showname(){
        echo "my name is krishna kharal $this->name";
    }

    function showage(){
        echo "my age is 18";
    }
    // function showdetails($name,$age){
    //     echo "your name is $name and age is $age";
    // }
}

class Teachers extends student{
    function showname(){
        echo "my name is Nabin kharal";
    }
    
    function showage(){
        echo "my age is 19";
    }
}


$t1 = new Teacher();
$t1->showname();
$t1->showage();
$t1->showdetails("api");
$t1->showdetails("krishna",17);


$t2 = new Teachers();
$t2->showname();
$t1->showdetails();

?>