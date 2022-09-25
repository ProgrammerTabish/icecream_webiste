<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "signin";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
    $data=$_POST["store_in_cart"];
    echo $data;
    //       if(!$conn){
//           die('Could not Connect MySql Server:(');
//         }
 
   
//     $cart_arr = mysqli_real_escape_string($conn, $_POST['cart_arr']);
 
//  $query="UPDATE $table_name SET `pid` = $cart_arr WHERE `email` = '$email';";

//     if(mysqli_query($conn,$query)) {
//      echo '1';
//     } else {
//        echo "Error: " . $sql . "" . mysqli_error($conn);
//     }
 
//     mysqli_close($conn);
 



?>