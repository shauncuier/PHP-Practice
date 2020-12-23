<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="contact.php">Contact</a></li>

</ul>
<?php
    $_SESSION['username']="Shauncuier";
    echo $_SESSION['username'];

    if (!isset($_SESSION['username'])){
        echo "You are Not logged in!";
    }else{
        echo "You are logged in!";
    }
?>
</body>
</html>