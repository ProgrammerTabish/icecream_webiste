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

function getpid($phone, $conn, $column)
{


    $sql = "SELECT * FROM signin WHERE phone = '$phone';";
    $result = mysqli_query($conn, $sql);
    $arr = mysqli_fetch_row($result);

    return $arr[$column];
}
$phone = $_SESSION["phone"];
$con = connect_to_db();
