<?php
function connect_to_db()
{
if($_SESSION["phone"] = $_SESSION["phone_u"])
    {$server_name = "localhost";
    $username = "root";
    $password = "";
    $dbname = "signin";
    $sql = mysqli_connect($server_name, $username, $password, $dbname);
    return $sql;
}}
if(isset($_POST))
{


$str = $_POST["cart"];
$name_arr=explode(",", $str);
array_pop($name_arr);

session_start();

$conn=connect_to_db();

foreach ($name_arr as $value) {
  $temp_arr=explode("-",$value);
$final_name=$temp_arr[0];
$value=$temp_arr[1];
if($temp_arr[1]=="0")
{

$query="SELECT * FROM `products` WHERE `name`='$final_name';";
$result=mysqli_query($conn, $query); 
$s = $result->fetch_assoc();
$location_with_image_name = strval($s["image"]);
if(file_exists($location_with_image_name)){
	$delete  = unlink($location_with_image_name);
	if($delete){
		$query="DELETE FROM `products` WHERE `products`.`name` = '$final_name'";
	}else{
	echo "not done";
	}
}
else
{
	$query="DELETE FROM `products` WHERE `products`.`name` = '$final_name'";
}

}
else
{	
$query="UPDATE `products` SET `section` = '$value' WHERE `products`.`name` = '$final_name'";
}
$result=mysqli_query($conn, $query); 
}
}
?>