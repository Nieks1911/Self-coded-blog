<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<?php include 'header.php'?>
<?php include 'topnav.php'?>

<?php
// Checking if user is logged in. 
if (isset ($_SESSION['userid'])) {
// If logged in the form shows up. 
?>
    <div>
        <form class="post_form" action="../database/insertdb.php" method="POST">
            <h1 class="page_title">Update Post</h1>
            <h4 class="td">Date</h4>
            <input id="np_date" name="np_date" type="date">
            <h4 class="tt">Title</h4>
            <input class="post_title" name="post_title" type="text" placeholder="Insert post title">
            <h4 class="tc">Content</h4>
            <textarea class="post_textarea" name="post_content" rows="10" cols="50" placeholder="Write something"></textarea>
            <button class="submit_btn" name="post_submit" type="submit">Submit</button>
        </form>
    </div>
<?php 
}
    // If not logged in, the user is not allowed to make a new page so the user is sent back to the home page.
else {
    header('Location: index.php');
}
?>

<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>