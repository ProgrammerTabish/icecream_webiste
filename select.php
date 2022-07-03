<?php 
$server="localhost";
$username="root";
$password="";
$dbname="signin";
$email="abcd@kaab.com";
$conn=mysqli_connect($server,$username,$password,$dbname);
$sql = "SELECT * FROM signin WHERE email = '$email';" ;
$result=mysqli_query($conn,$sql);
$arr=mysqli_fetch_row($result);
print_r($arr);
if($arr=="")
{ echo "not exist";
    
}
else{
   echo "found";
}


?>