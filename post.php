<?php 

function form_validation($name,$email)
{
  $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^"; 

$score=0;
 if (!preg_match ("/^[a-zA-z]*$/", $name) ) {  
   $_SESSION["error_name"]="Only alphabets and whitespace are allowed!";  
           
} 
 else{
    $score++;
 }
if (!preg_match ($pattern, $email) ){  
     $_SESSION["error_email"]="Email is not valid!";  
            
} 
else {
     $score++;}
if(isset($_POST['tnc'])){
   
    $score++;
    
}
else{
 $_SESSION["error_tnc"]="You must agree terms and conditions!"; 
}
if($score==3)
{
    return true;
}
else {
    return false;}
}


function connect_to_db()
{
$server_name="localhost"; 
$username="root";
$password="";
$dbname="signin";
$sql=mysqli_connect($server_name,$username,$password,$dbname);
return $sql;
}

function send_otp_to($otp,$email)
{

}

function generate($n) {
     
    $generator = "1357902468";

    $result = "";
  
    for ($i = 1; $i <= $n; $i++) {
        $result .= substr($generator, (rand()%(strlen($generator))), 1);
    }
  
    // Return result
    return $result;
}


function does_email_exists($email,$conn)
{
    // $sql = "SELECT * FROM `signin` WHERE `email` = '$email';" ;
 
   
$sql = "SELECT * FROM signin WHERE email = '$email';" ;
$result=mysqli_query($conn,$sql);
$arr=mysqli_fetch_row($result);
print_r($arr);
if($arr=="")
{ echo "not exist";
     echo"not present";
    return false;
}

else{
   echo "found";
   echo "present";
    return true;
}



}

function insert_new_user($conn,$name,$email,$otp)
{

  $query="INSERT INTO `signin` (`name`, `email`, `otp`) VALUES ('$name', '$email', '$otp');";
mysqli_query($conn,$query);
}


function update_otp($table_name,$otp,$email,$conn)
{
$query="UPDATE $table_name SET `otp` = '$otp' WHERE `email` = '$email';";
mysqli_query($conn,$query);
}
function reset_otp($table_name,$email,$conn)
{
$query="UPDATE $table_name SET `otp` = 1 WHERE `email` = '$email';";
mysqli_query($conn,$query);
}

function close_conn($conn)
{
  mysqli_close($conn);
}




if ($_SERVER["REQUEST_METHOD"] == "POST"){
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$table_name="signin";
if(form_validation($name,$email)==true)
{
$conn=connect_to_db();
if($conn!=false)
{
 $otp=generate(6);
 send_otp_to($otp,$email);
 $is_available=does_email_exists($email,$conn);
 if($is_available==true)
 {
   update_otp($table_name,$otp,$email,$conn);
   $_SESSION["email"]=$email;
   echo "/redirect to otp.php
   //start timer of 5 min 1";
   header("Location: otp.php");
 }
 else
 {
    insert_new_user($conn,$name,$email,$otp);
    $_SESSION["email"]=$email;
   echo"
    //redirect to opt.php
    //start timer of 5 min 2";
    
    header("Location: otp.php");
 }
}
else
 {
    //website is down for maintainance
   
    header("Location: oops.php");
 }

}
else
 {
   
    //rediricet to signin page
    header("Location: signin.php");
 }


}



?>


















