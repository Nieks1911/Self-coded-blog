<?php

include 'dbconnection.php';

// Checking if user ended up here by clicking the update post button.
// If not, user gets sent back to the CLE page. 
if (!isset($_POST['update_submit'])) {
    header('location: ../pages/cle.php');
}
// If user did press the update post button, the code to update the database will be executed.
else {
    // I want to have the id of the post because I can use it to identify the concerned post and update it.
    $id = mysqli_real_escape_string($conn, htmlentities($_POST['id']));
    $date = mysqli_real_escape_string($conn, htmlentities($_POST['np_date']));
    $title = mysqli_real_escape_string($conn, htmlentities($_POST['post_title']));
    $content = mysqli_real_escape_string($conn, htmlentities($_POST['post_content']));
    
    $sql = "UPDATE posts SET date=?, title=?, content=? 
            WHERE id=?;";
            
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        var_dump($stmt);
        exit;
    } 
    else {
        mysqli_stmt_bind_param($stmt, "sssd", $date, $title, $content, $id);
        mysqli_stmt_execute($stmt);
    }
} 

header('Location: ../pages/index.php');