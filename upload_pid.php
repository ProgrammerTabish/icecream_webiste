<?php
include 'arrays.php';
include 'get_db_row.php';



function update_cart($table_name, $val, $phone, $conn)
{
    $query = "UPDATE $table_name SET `pid` = '$val' WHERE `phone` = '$phone';";
    mysqli_query($conn, $query);
}

$final_str = $_POST["cart"];


$phone = $_SESSION["phone"];
$table = $_SESSION["table"];




$con = connect_to_db();
update_cart($table, $final_str, $phone, $con);
