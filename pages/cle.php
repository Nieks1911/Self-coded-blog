<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieks Blog - CLE</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<?php 
include 'header.php';
include 'topnav.php';
include '../database/dbconnection.php';
?>
<?php
$sql = "SELECT * FROM posts ORDER BY id DESC;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        $array = [];
        while ($row = mysqli_fetch_assoc($result)) { 
            ?>
            <div class="cle_grid">
                <!-- The id is an anchor point. -->
                <div class="cle_post" id="<?php echo $row['id'];?>">
                    <img class="post_main_img" src="../images/image.png">
                    <h1 class="post_main_title"><?php echo $row['title'];?></h1>
                    <h2 class="post_date"><?php echo $row['date'];?></h2>
                    
                    <!-- If the user is logged in, the delete button and edit button is visible and the user can delete or edit a post. -->
                    <?php if (isset ($_SESSION['userid'])) {?>
                    <!-- Delete -->
                    <form class="delete_form" action="../includes/delete.php" method="POST">
                        <button class="delete_btn" name="delete_btn" type="submit">Delete</button>
                        <input name="id" type="hidden" value="<?php echo $row['id'];?>">
                    </form>
                    <!-- Update -->
                    <form class="update_form" action="update.php" method="POST">
                    <button class="update_btn" name="update_btn" type="submit">Edit</button>
                        <input name="id" type="hidden" value="<?php echo $row['id'];?>">
                        <input name="date" type="hidden" value="<?php echo $row['date'];?>">
                        <input name="title" type="hidden" value="<?php echo $row['title'];?>">
                        <input name="content" type="hidden" value="<?php echo $row['content'];?>">
                    </form>
                    <?php
                    }
                    ?>
                    <div class="post_content"><?php echo $row['content'];?></div>
                </div>
            </div>
            <?php
        }
    }
    ?>
</body>
</html>