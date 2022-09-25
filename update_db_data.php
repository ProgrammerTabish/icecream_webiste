<?php
include 'arrays.php';
include 'get_db_row.php';


function update_data_cell($table_name, $val, $phone, $conn, $col)
{
    $query = "UPDATE $table_name SET `$col` = '$val' WHERE `phone` = '$phone';";
    $status = mysqli_query($conn, $query);
    if ($status) {
        return true;
    } else {
        return false;
    }
}
