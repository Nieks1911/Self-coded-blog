<?php

include '../database/dbconnection.php';


// Checking if user clicked the delete button.
// If user clicked the delete button, code will execute. 
if (isset($_POST['delete_btn'])) {
    // I need the id of the post so I can identify the right post entry in the database so I can delete the right post.
    $id = mysqli_real_escape_string($conn, htmlentities($_POST['id']));

    $sql = "DELETE FROM posts WHERE id=?;"; //. $id;

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        var_dump($stmt);
        exit;
    } 
    else {
        mysqli_stmt_bind_param($stmt, "d", $id);
        mysqli_stmt_execute($stmt);
    }
}
// If delete button was never pressed the user will get send to the CLE page.
else {
    header('Location: ../pages/cle.php');
}

header('Location: ../pages/cle.php');
?>