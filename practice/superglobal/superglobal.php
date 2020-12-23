<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Global Function</title>
</head>
<body>
<?php

    /*
    $GLOBALS;
    $_POST;
    $_GET;
    $_COOKIE;
    $_SESSION;
    */

        $x = 10;
        function something(){
            $y = 10;
            echo $GLOBALS['x'];
        }
        something();
?>
</body>
</html>