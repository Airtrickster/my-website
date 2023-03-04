<?php
    function itemExists($table, $column, $productId) {
        session_start();
        include "db_conn.php";
        $checkItemstmt = mysqli_prepare($link, "SELECT DISTINCT $column FROM $table WHERE user_id = ? AND $column = ?;");
        mysqli_stmt_bind_param($checkItemstmt, "ii" , $userId, $productId);
        mysqli_stmt_execute($checkItemstmt);
        if (! mysqli_num_rows(mysqli_stmt_get_result($checkItemstmt)) == 0) {
            return true;
        } else {
            return false;
        }
    }

?>