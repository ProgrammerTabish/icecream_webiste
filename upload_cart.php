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

function update_cart($table_name,$cart,$email,$conn)
{
$query="UPDATE $table_name SET `cart` = '$cart' WHERE `email` = '$email';";
mysqli_query($conn,$query);
}
$cart=$_POST["cart"];
$email=$_SESSION["email"];
$table=$_SESSION["table"];
$con=connect_to_db();
update_cart($table,$cart,$email,$con);

?>