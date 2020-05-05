
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieks Blog - Login</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<?php include 'header.php'?>
<?php include 'topnav.php'?>

<form action="../includes/login.inc.php" method="POST">
    <input type="text" name="mailuid" placeholder="Username/E-mail...">
    <input type="password" name="pwd" placeholder="Password...">
    <button type="submit" name="login-submit">Login</button>
</form>
<form action="../includes/logout.inc.php" method="POST">
    <button type="submit" name="logout-submit">Logout</button>
</form>
</body>
</html>