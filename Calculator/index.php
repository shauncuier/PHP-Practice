<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

<form>
    <input required type="text" name="num1" placeholder="Number 1">
    <br>
    <input  required type="text" name="num2" placeholder="Number 2">
    <br><br>
    Method:
    <select name="oparetror">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
    <br><br>
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>The ans is:</p>
<?php
    echo"Ans = ";
    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $opretor = $_GET['oparetror'];
        switch ($opretor) {
            case 'None':
                echo "you need to select a method";
                break;
            
            case 'Add':
                echo $result1 + $result2;
                break;

            case 'Subtract':
                echo $result1 - $result2;
                break;

            case 'Multiply':
                echo $result1 * $result2;
                break;

            case 'Divide':
                echo $result1 / $result2;
                break;
        }
    }

?>

<link rel="stylesheet" href="">
</body>
</html>
