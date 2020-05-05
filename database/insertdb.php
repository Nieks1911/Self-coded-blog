<?php

include 'dbconnection.php';

// Checking if user ended up here by clicking the create post button.
// If not, user gets sent back to the home page. 
if (!isset($_POST['post_submit'])) {
    header('location: ../pages/index.php');
}
// If user did press the create post button, the code to create a new entry in the database will be executed.
else {
    $date = mysqli_real_escape_string($conn, htmlentities($_POST['np_date']));
    $title = mysqli_real_escape_string($conn, htmlentities($_POST['post_title']));
    $content = mysqli_real_escape_string($conn, htmlentities($_POST['post_content']));
    
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

header('Location: ../pages/index.php');