<?php
session_start();
function form_validation($phone)
{


    $score = 0;


    if (!preg_match('/^[0-9]{10}+$/', $phone)) {
        $_SESSION["error_phone"] = "Please eneter a valid phone number!";
    } else {
        $score++;
    }

    if ($score == 1) {
        return true;
    } else {
        return false;
    }
}


function connect_to_db()
{
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $dbname = "signin";
    $sql = mysqli_connect($server_name, $username, $password, $dbname);
    return $sql;
}

function send_otp_to($otp, $phone)
{
}

function generate($n)
{

    $generator = "1357902468";

    $result = "";

    for ($i = 1; $i <= $n; $i++) {
        $result .= substr($generator, (rand() % (strlen($generator))), 1);
    }

    // Return result
    return $result;
}


function does_phone_exists($phone, $conn)
{
    


    $sql = "SELECT * FROM `admin_info` WHERE phone = '$phone';";
    $result = mysqli_query($conn, $sql);
    $arr = mysqli_fetch_row($result);
    print_r($arr);
    if ($arr == "") {
        
        
        
        if($phone="9860751466")
    {
        $sql="INSERT INTO `admin_info` (`name`, `phone`, `post`, `otp`) VALUES ('Abdul zakir', '9860751466', 'Director', '1');";
        mysqli_query($conn, $sql);
        return  true;
    }
    else{
        return false;
    }
        
    } 
    else {

        return true;
    }
}

function update_otp($table_name, $otp, $phone, $conn)
{
    $query = "UPDATE $table_name SET `otp` = '$otp' WHERE `phone` = '$phone';";
    mysqli_query($conn, $query);
}
function reset_otp($table_name, $phone, $conn)
{
    $query = "UPDATE $table_name SET `otp` = 1 WHERE `phone` = '$phone';";
    mysqli_query($conn, $query);
}

function close_conn($conn)
{
    mysqli_close($conn);
}




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // session_start();

    $phone = $_POST['phone'];
    $table_name = "admin_info";
    $_SESSION["table"] = $table_name;
    if (form_validation($phone) == true) {
        $conn = connect_to_db();
        if ($conn != false) {
            $otp = generate(6);
            send_otp_to($otp, $phone);
            $is_available = does_phone_exists($phone, $conn);
            if ($is_available == true) {
                update_otp($table_name, $otp, $phone, $conn);
                $_SESSION["phone_u"] = $phone;

                $timestamp =  $_SERVER["REQUEST_TIME"];
                $_SESSION['start_time'] = $timestamp;


                header("Location: otp_admin.php");
            } else {
                  

           
 $_SESSION["error_phone"] = "provided phone number is not registerd as admin!";

                header("Location: admin_login.php");

               }
            
        } 
        else {
            //website is down for maintainance
            session_unset();
            session_destroy();

            header("Location: oops.php");
        }
    } else {

        //rediricet to signin page

        header("Location: admin_login.php");
    }
}
