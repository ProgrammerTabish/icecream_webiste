<?php
session_start();
function connect_to_db()
{
$server_name="localhost"; 
$username="root";
$password="";
$dbname="signin";
$sql=mysqli_connect($server_name,$username,$password,$dbname);
return $sql;
}

function getpid($email,$conn)
{
    // $sql = "SELECT * FROM `signin` WHERE `email` = '$email';" ;
 
   
$sql = "SELECT * FROM signin WHERE email = '$email';" ;
$result=mysqli_query($conn,$sql);
$arr=mysqli_fetch_row($result);
print_r($arr[5]);
return $arr[5];
}
$email=$_SESSION["email"];
$con=connect_to_db();
$cart_data=getpid($email,$con);
?>