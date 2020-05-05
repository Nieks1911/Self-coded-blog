<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieks Blog - topnav</title>
</head>
<body>
    <div id="topnav">
        <a id="topnav_home_link" href="index.php">Home</a>
        <a class="topnav_link" href="cle.php">CLE</a>
        <a class="topnav_link" href="update_bb.php">Building Blocks</a>
        <a class="topnav_link" href="projects.php">Projects</a>
        <a class="topnav_link" href="about_me.php">About me</a>
        <a class="topnav_link" href="contact.php">Contact</a>
        <?php
        // If user is logged the new post link is visible and a logout button is avaible.
        if (isset ($_SESSION['userid'])) {
        echo '<a class="topnav_link" href="new.php">New</a>';
        echo '<a class="topnav_link" href="../includes/logout.inc.php">Logout</a>';
        }
        // If user is not logged in the login button is avaible.
        else {
            echo '<a class="topnav_link" href="login.php">Login</a>';
        }
        ?>
        <div id="topnav_searchbar">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
        </div>
    </div>
</body>
</html>