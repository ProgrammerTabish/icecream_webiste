<?php

include 'arrays.php';
include 'get_db_row.php';


function update_cart($table_name, $cart, $phone, $conn)
{
    $query = "UPDATE $table_name SET `cart` = '$cart' WHERE `phone` = '$phone';";
    mysqli_query($conn, $query);
}

$cart = $_POST["cart"];

print($cart);
function binarySearch($arr, $x)
{
    $l = 0;
    $r = count($arr);
    while ($l <= $r) {
        $m = $l + (int)(($r - $l) / 2);

        $res = strcmp($x, $arr[$m]);


        if ($res == 0)
            return $m - 1;


        if ($res > 0)
            $l = $m + 1;


        else
            $r = $m - 1;
    }

    return -1;
}

$arrayString = explode(" ", $cart);
$end_str = end($arrayString);
$result = binarySearch($arr, $end_str);

if ($result == -1)
    print("Element not present");
else {

    $phone = $_SESSION["phone"];
    $table = $_SESSION["table"];

    $con = connect_to_db();
    update_cart($table, $cart, $phone, $con);
}
if ($cart == NULL) {
    $phone = $_SESSION["phone"];
    $table = $_SESSION["table"];

    $con = connect_to_db();
    update_cart($table, $cart, $phone, $con);
} else {
    print("Element not present");
}
