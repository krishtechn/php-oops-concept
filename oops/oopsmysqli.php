<?Php 
// connect with database 
// $conn = mysqli_connect("localhost","root","");
// check database is connect or not
// if($conn){
//     echo "successfully connect";
// }

// connect database using oop
$conn = new mysqli("localhost","root","","website");
// var_dump($conn);
if($conn){
    echo "connected";
}

// $sql = "INSERT INTO navbar(navitems,navlink,status) values('Contact','#','1')";
// $conn->query($sql);
// $conn->query($sql);

// $sql = "SELECT * FROM navbar";
// $data = $conn->query($sql);
// $num = $data->num_rows;

// if($num > 0){
//     while ($row = $data->fetch_assoc()){
//         // var_dump($row);
//         // echo $row["navlink"];
//     }
// }

// function selectdata($conn,$tablename){
//     $sql = "SELECT * FROM $tablename";
//     $data = $conn->query($sql);
//     if($data->num_rows>0){
//         while($row = $data->fetch_all(true)){
//             var_dump($row);
//         }
//     }
//     return $data;
// }

// function selectdata($conn,$tablename){
//     $sql = "SELECT * FROM $tablename";
//     $data = mysqli_query($conn,$sql);
//     $d = array();
//     if(mysqli_num_rows($data)>0){
//        while($row = mysqli_fetch_assoc($data)){
//            $d = $row;
//        }
//     }
//     return $d;
// }

// $d1 = selectdata($conn,"navbar");
// $d2 = selectdata($conn,"code");
// var_dump($d1);
// var_dump($d2);




?>