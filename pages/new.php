<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'header.php'?>
    <?php include 'topnav.php'?>

    <div>
        <form id="np_form" action="insertdb.php" method="POST">
            <h4 class="input_title" id="td">Date</h4>
            <input id="np_date" name="np_date" type="date">
            <h4 class="input_title" id="tt">Title</h4>
            <input id="np_title" name="np_title" type="text" placeholder="Insert post title">
            <h4 class="input_title" id="tc">Content</h4>
            <textarea id="np_textarea" name="np_content" rows="10" cols="50" placeholder="Write something"></textarea>
            <button class="submit_btn" name="np_submit" type="submit">Submit</button>
        </form>
    </div>

<script type="text/javascript" src="new.js"></script>
</body>
</html>
