<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php
    $x = 97;
    $a = 53;
    function newCalc($x){
        $number = $x *0.75;
        echo "Here is 75% of what you wrote: ".$number."<br>";
    }
    newCalc($x);
    newCalc($a);
    
    ?>
</body>
</html>