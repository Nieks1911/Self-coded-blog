<?php 

include 'dbconnection.php';

// Checking if user ended up here by clicking the update bb button.
// If not, user gets sent back to the home page. 
if (!isset($_POST['update_bb_submit'])) {
    header('location: ../pages/index.php');
}
// If user did press the update post button, the code to update the database will be executed.
else {
    $pp = mysqli_real_escape_string($conn, htmlentities($_POST['bb_pp']));
    $bab = mysqli_real_escape_string($conn, htmlentities($_POST['bb_bab']));
    $cnt = mysqli_real_escape_string($conn, htmlentities($_POST['bb_cnt']));
    $dg = mysqli_real_escape_string($conn, htmlentities($_POST['bb_dg']));
    $cnc = mysqli_real_escape_string($conn, htmlentities($_POST['bb_cnc']));
    $io = mysqli_real_escape_string($conn, htmlentities($_POST['bb_io']));
    $ol = mysqli_real_escape_string($conn, htmlentities($_POST['bb_ol']));
    $be = mysqli_real_escape_string($conn, htmlentities($_POST['bb_be']));
    $fe = mysqli_real_escape_string($conn, htmlentities($_POST['bb_fe']));
    $im = mysqli_real_escape_string($conn, htmlentities($_POST['bb_im']));
    $ok = mysqli_real_escape_string($conn, htmlentities($_POST['bb_ok']));
    $sv = mysqli_real_escape_string($conn, htmlentities($_POST['bb_sv']));

    $sql = "UPDATE bb_status SET date=?, title=?, content=? 
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