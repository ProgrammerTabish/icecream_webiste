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

function update_pid($table_name,$pid,$email,$conn)
{
$query="UPDATE $table_name SET `pid` = '$pid' WHERE `email` = '$email';";
mysqli_query($conn,$query);
}
$pid=$_POST["pid"];
$email=$_SESSION["email"];
$table=$_SESSION["table"];
$con=connect_to_db();
update_pid($table,$pid,$email,$con);

?>