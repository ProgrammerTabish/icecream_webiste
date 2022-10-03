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
  $temp_arr=explode(".",$value);
$final_name=$temp_arr[0];
$final_str=$temp_arr[1].".".$temp_arr[2];
if($temp_arr[1]=="C")
{

$query="SELECT * FROM `sections` WHERE `name`='$final_name';";
$result=mysqli_query($conn, $query); 
$s = $result->fetch_assoc();
$location_with_image_name = strval($s["background"]);
if(file_exists($location_with_image_name)){
	$delete  = unlink($location_with_image_name);
	if($delete){
		$query="DELETE FROM `sections` WHERE `sections`.`name` = '$final_name'";
	}else{
	echo "not done";
	}
}
else
{
	$query="DELETE FROM `sections` WHERE `sections`.`name` = '$final_name'";
}

}
else
{	
$query="UPDATE `sections` SET `priority` = '$final_str' WHERE `sections`.`name` = '$final_name'";
}
$result=mysqli_query($conn, $query); 
}
}
?>