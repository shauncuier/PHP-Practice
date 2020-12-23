<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date Practice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$dayOfWeek = date('w');
switch ($dayOfWeek) {
    case 0:
        echo "Mondays";
        break;
    case 1:
        echo "Tuesdays";
        break;
    case 2:
        echo "<p>Wednesdays</p>";
        break;
    case 3:
        echo "Thursdays";
        break;
    case 4:
        echo "Fridays";
        break;
    case 5:
        echo "Saturdays";
        break;
    case 6:
        echo "Sundays";
        break;
}
?>
</body>
</html>