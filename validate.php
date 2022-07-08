<?php

function connect_to_db()
{
$server_name="localhost"; 
$username="root";
$password="";
$dbname="signin";
$sql=mysqli_connect($server_name,$username,$password,$dbname);
return $sql;
}



function reset_otp($table_name,$email,$conn)
{
$query="UPDATE $table_name SET `otp` = 1 WHERE `email` = '$email';";
mysqli_query($conn,$query);
}
session_start();
$table_name="signin";
echo $_SESSION["email"];
$email=$_SESSION["email"];
$conn=connect_to_db();
$sql = "SELECT * FROM signin WHERE email = '$email';" ;
$result=mysqli_query($conn,$sql);
$arr=mysqli_fetch_row($result);
print_r($arr);
$otp_fetched=$arr[2];

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$user_input=$_POST['otp'];
}


echo $otp_fetched;
echo "   ";
echo $user_input;

if($otp_fetched==$user_input)
{
   echo " varified";
   reset_otp($table_name,$email,$conn);
   header("Location: sucessful.php");
}
else{   
 $_SESSION["error_otp"]="The otp is not correct enter it again!";
 echo "failed";
 header("Location:otp.php");
}

?>