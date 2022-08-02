<?php 
// class Student{
//     public $age = 10;
//     private $password = 0;

//     function setpassword($password){
//          $this->password = $password;
//     }

//     function getpassword(){
//         echo "your password is $this->password";
//     }
// }


// class Teacher extends Student{
//     private $password = 0;

//     function setpassword($password){
//          $this->password = $password;
//     }

//     function getpassword(){
//         echo "your are teacher your password is $this->password";
//     }
// }

// $s1 = new Student();
// echo "<pre>";
// echo var_dump($s1);

// // $s1->age = 34;
// // echo "your age is ".$s1->age;
// $s1->setpassword(343434);
// $s1->getpassword();

// $s2 = new Student();
// $s2->getpassword();


// $t1 = new Teacher();
// $t1->setpassword(34348349);
// $t1->getpassword();


class Student{
    // public $name,$age,$email,$class;
    // private $name,$age,$email,$class;
       protected $name,$age,$email,$class;

    public function show_info(){
        echo "this is info";
    }

    function __construct($name,$age,$email,$class){
       $this->name = $name;
       $this->age = $age;
       $this->email = $email;
       $this->class = $class;
    }

    public function showdata(){
        echo "your name is $this->name <br/> your age is $this->age <br/> your email is $this->email <br/> your class is $this->class";
    }

    function __destruct(){
        echo "this is destructor";
    }
}


class Teacher extends Student{

}


$s1 = new Student("krish",17,"kk@gmail.com","IT fourth samester");
echo $s1->show_info();
$s1->showdata();


$s2 = new Student("Nabin",11,"nabin@gmail.com","8");
echo "<h1>Nabin data</h1>";
$s2->showdata();

$t1 = new Teacher("Nabin",11,"nabin@gmail.com","8");
echo var_dump($t1);
$t1->showdata();


?>