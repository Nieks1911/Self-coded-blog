<?php

include 'dbconnection.php';

if (!isset($_POST['np_submit'])) {
    header('location: index.php');
}
else {
    $date = mysqli_real_escape_string($conn, htmlentities($_POST['np_date']));
    $title = mysqli_real_escape_string($conn, htmlentities($_POST['np_title']));
    $content = mysqli_real_escape_string($conn, htmlentities($_POST['np_content']));
    
    $sql = "INSERT INTO posts (date, title, content)
            VALUES (?, ?, ?);";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        var_dump($stmt);
        exit;
    } 
    else {
        mysqli_stmt_bind_param($stmt, "sss", $date, $title, $content);
        mysqli_stmt_execute($stmt);
    }
} 

header('Location: index.php');