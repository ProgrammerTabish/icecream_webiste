<?php
session_start();
function connect_to_db()
{
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $dbname = "signin";
    $sql = mysqli_connect($server_name, $username, $password, $dbname);
    return $sql;
}

function update_cart($table_name, $name, $phone, $conn)
{
    $query = "UPDATE $table_name SET `name` = '$name' WHERE `phone` = '$phone';";
    mysqli_query($conn, $query);
}
$name = $_POST["name"];
$phone = $_SESSION["phone"];
$table = $_SESSION["table"];
$con = connect_to_db();
update_cart($table, $name, $phone, $con);






function getpid($phone, $conn)
{
    // $sql = "SELECT * FROM `signin` WHERE `phone` = '$phone';" ;


    $sql = "SELECT * FROM signin WHERE phone = '$phone';";
    $result = mysqli_query($conn, $sql);
    $arr = mysqli_fetch_row($result);
    print_r($arr[0]);
    return $arr[0];
}
$phone = $_SESSION["phone"];
$con = connect_to_db();
$cart_data = getpid($phone, $con);
