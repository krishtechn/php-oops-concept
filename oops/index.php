<?php 
 $conn = new mysqli('localhost','root','','website');
//   echo '<pre>';
//   var_dump($conn);

// check database connect or not

//  if($conn == true){
//      echo "connected successfully";
//  }else{
//      echo "not connected";
//  }

// insert data into database;

// $sql = "INSERT INTO navbar(navitems,navlink,status) values('Contact','#','1')";
// $conn->query($sql);
// echo $conn->insert_id;

// $sql = "SELECT * FROM services";
// $data = $conn->query($sql);
// echo '<Pre>';

// fetch all data from database;
// print_r($data->fetch_all(true));
// $d = $data->fetch_all(true);
// foreach($d as $value){
//    echo $value['title'];
// }

// update table using oops 
// $sql = "UPDATE navbar set navitems='App development' WHERE Id=9;";
// $conn->query($sql);

// delete data from table 
// $sql = "DELETE FROM navbar WHERE Id = '9'";
// $conn->query($sql);

// multiple query in php using oops 
// $sql = "INSERT INTO navbar(navitems,navlink,status) values('Contact','#','1');";
// $sql .= "INSERT INTO navbar(navitems,navlink,status) values('Contact us','#','1');";
// $conn->multi_query($sql);


$sql = "INSERT INTO navbar(navitems,navlink,status) values(?,?,?);";
$ob = $conn->prepare($sql);
$ob->bind_param('iss',$items,$link,$status);

$items = "hello";
$link = "#";
$status = "1";
$ob->execute();


?>