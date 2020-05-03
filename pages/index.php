<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <?php 
    include 'header.php';
    include 'topnav.php';
    include '../database/dbconnection.php';

    if (isset ($_SESSION['userid'])) {
        echo "You are logged in!";
    }
    else {
        echo "You are logged out!";
    }

    // Selects and displays the last 5 posts made in the database.
    $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 5;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        $array = [];
        while ($row = mysqli_fetch_assoc($result)) { 
            ?>
            <div id="homepage">
                <div class="pp">
                    <img class="pp_img" src="../images/image.png">
                    <h2 class="pp_title"><?php echo $row['title'];?></h2>
                    <span class="pp_date"><?php echo $row['date'];?></span>
                    <div class="pp_content"><?php echo $row['content'];?></div>
                    <!-- Button that sends the user to the corresponding full post on another page. -->
                    <button class="pp_btn" type="submit" onclick="location.href='cle.php#<?php echo $row['id'];?>';">Details</button>
                </div>
            </div>
            <?php
        }
    } 
    ?>
<script type="text/javascript" src="../js/index.js"></script>

</body>
</html>
