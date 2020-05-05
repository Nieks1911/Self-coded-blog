<?php 

// Checks if the login button has been clicked.
if (isset($_POST['login-submit'])) {
    include '../database/dbconnection.php';

    // Gets username and password
    $mailuid =  mysqli_real_escape_string($conn, htmlentities($_POST['mailuid']));
    $password =  mysqli_real_escape_string($conn, htmlentities($_POST['pwd']));

    // If nothing was inserted in the input fields, user gets redirected to the home page with an error message in the URL.
    if (empty($mailuid) || empty($password)) {
        header("Location: ../pages/index.php?error=emptyfields");
        exit();
    }
    // Comparing username / email (email will be added later in development).
    else {
        $sql = "SELECT * FROM users WHERE uidUsers =? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../pages/index.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                // If password does not match any password in the database, user gets redirected to the home page with a wrong password message in the URL. 
                if ($row['pwdUsers'] !== $password) {
                    header("Location: ../pages/login.php?error=wrongpwd");
                    exit();
                }
                // If the is a match, a session will be created and the user will be redirected to the homepage, logged in.
                else if ($row['pwdUsers'] == $password) {
                    session_start();
                    $_SESSION['userid'] = $row['idUsers'];
                    $_SESSION['useruid'] = $row['uidUsers'];

                    header("Location: ../pages/index.php?login=succes");
                    exit();
                }
                else {
                    header("Location: ../pages/index.php?error=wrongpwd");
                    exit();
                } 
            }
            // User gets redirected to home page when no matching username is found in the database.
            else {
                header("Location: ../pages/index.php?error=nouser");
                exit();
            }   
        }
    }

}
// Wrapping up the login script.
else {
    header("Location: ../pages/index.php");
    exit();
}

?>