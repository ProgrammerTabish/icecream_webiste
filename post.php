<?php
session_start();
function form_validation($name, $phone)
{


    $score = 0;

    if (!preg_match('/^[a-zA-Z\. ]*$/', $name) || $name == "") {
        $_SESSION["error_name"] = "Please enter a valid name!";
    } else {
        $score++;
    }
    if (!preg_match('/^[0-9]{10}+$/', $phone)) {
        $_SESSION["error_phone"] = "Please eneter a valid phone number!";
    } else {
        $score++;
    }
    if (isset($_POST['tnc'])) {

        $score++;
    } else {
        $_SESSION["error_tnc"] = "You must agree our terms and conditions to proceed!";
    }
    if ($score == 3) {
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
    // $sql = "SELECT * FROM `signin` WHERE `phone` = '$phone';" ;


    $sql = "SELECT * FROM signin WHERE phone = '$phone';";
    $result = mysqli_query($conn, $sql);
    $arr = mysqli_fetch_row($result);
    print_r($arr);
    if ($arr == "") {
        return false;
    } else {

        return true;
    }
}

function insert_new_user($conn, $name, $phone, $otp)
{
    $default = NULL;
    $query = "INSERT INTO `signin` (`name`, `phone`,`pid`,`cart`,`otp`,`ordered`,`current_order`,`order_id`,`location`,`payment_status`,`Order_compleation`) VALUES ('$name', '$phone','$default', '$default', '$otp','$default','$default','$default','$default','$default','$default');";
    mysqli_query($conn, $query);
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
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $table_name = "signin";
    $_SESSION["table"] = $table_name;
    if (form_validation($name, $phone) == true) {
        $conn = connect_to_db();
        if ($conn != false) {
            $otp = generate(6);
            send_otp_to($otp, $phone);
            $is_available = does_phone_exists($phone, $conn);
            if ($is_available == true) {
                update_otp($table_name, $otp, $phone, $conn);
                $_SESSION["phone_u"] = $phone;
                echo "/redirect to otp.php
   //start timer of 5 min 1";
                $timestamp =  $_SERVER["REQUEST_TIME"];
                $_SESSION['start_time'] = $timestamp;


                header("Location: otp.php");
            } else {
                insert_new_user($conn, $name, $phone, $otp);
                $_SESSION["phone_u"] = $phone;

                echo "
    //redirect to opt.php
    //start timer of 5 min";

                $timestamp =  $_SERVER["REQUEST_TIME"];
                $_SESSION['start_time'] = $timestamp;

                header("Location: otp.php");
            }
        } else {
            //website is down for maintainance
            session_unset();
            session_destroy();
            header("Location: oops.php");
        }
    } else {

        //rediricet to signin page

        header("Location: signin.php");
    }
}
