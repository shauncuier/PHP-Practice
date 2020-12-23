<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loop Practice</title>
</head>
<body>
    <?php
        //Loop
        // While Loop
        $a = 1;
        while ($a <= 5) {
            echo "Hi This is While Loop!<br>";
            $a++;
        }
echo "<br>";
        // Do While Loop
        $a = 1;
        do {
            echo "Hello This is Do While Loop! <br>";
            $a++;
        } while ($a <= 5);
echo "<br>";
        // For Loop 
            for ($i=1; $i < 5; $i++) { 
                echo "Hi This is For Loop <br>";
            }
echo "<br>";
        // Foreach Loop
        $array = array("1","2","3","4","5");
            foreach ($array as $loopdata) {
                echo "Hi! This is Foreach Loop. Exmple - ".$loopdata."<br>";
        }
    





    ?>
</body>
</html>