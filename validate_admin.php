<?php

function connect_to_db()
{
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $dbname = "signin";
    $sql = mysqli_connect($server_name, $username, $password, $dbname);
    return $sql;
}

function reset_otp($table_name, $phone, $conn)
{
    $query = "UPDATE $table_name SET `otp` = 1 WHERE `phone` = '$phone';";
    mysqli_query($conn, $query);
}

session_start();
if (($_SERVER["REQUEST_TIME"] - $_SESSION['start_time']) > 180) {
    session_unset();
    session_destroy();
    header("Location: otp_expire.php");
} else {
    $table_name = "admin_info";
    // echo $_SESSION["phone_u"];
    $phone = $_SESSION["phone_u"];
    $conn = connect_to_db();
    $sql = "SELECT * FROM admin_info WHERE phone = '$phone';";
    $result = mysqli_query($conn, $sql);
    $arr = mysqli_fetch_row($result);
    $otp_fetched = $arr[3];
    $_SESSION["position"] = $arr[2];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_input = $_POST['otp'];
    }

    if ($otp_fetched == $user_input && $user_input != 1) {
        echo " varified";
        reset_otp($table_name, $phone, $conn);
        $_SESSION["phone"] = $_SESSION["phone_u"];
        $_SESSION["name"] = $arr[0];
        echo $arr[3];

        header("Location: admin_board.php");
    } else {
        $_SESSION["error_otp"] = "The otp is not correct enter it again!";
        //  echo "failed";
        header("Location:otp_admin.php");
        // echo $arr[4];

    }
}
