&lt?php 

Interface A{
   public function showA();
}

Interface C{
   public function showC();
}

class B implements A,C{
    public static $name = "krishna kharal";
    function showA(){
    echo "this is class B";
    }
    function showC(){
        echo "this is class c method";
    }
    public static function showdata(){
        echo "this is method B class implements from A and C class";
    }
}

$a = new B();
echo var_dump($a);
$a-&gtshowA();
$a-&gtshowC();
echo $a::$name;
$a::showdata();
?&gt