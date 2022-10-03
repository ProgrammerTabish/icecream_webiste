<?php
  function connect_to_db()
{
if($_SESSION["phone"] = $_SESSION["phone_u"] && $_SESSION["phone"] =="9860751466" )
    {$server_name = "localhost";
    $username = "root";
    $password = "";
    $dbname = "signin";
    $sql = mysqli_connect($server_name, $username, $password, $dbname);
    return $sql;
}
else
{
    return null;
}
}
session_start();

if(isset($_POST["rm_str"]))
{
  
  $rm_str=$_POST["rm_str"];
  $rm_arr=explode(",",$rm_str);
  array_pop($rm_arr);


function remove_admin($val)
{
        
$sql="DELETE FROM `admin_info` WHERE `admin_info`.`phone` = '$val'";
$conn= connect_to_db();

  mysqli_query($conn, $sql);  


}

foreach($rm_arr as $val)
{

remove_admin($val);

}


}
?>