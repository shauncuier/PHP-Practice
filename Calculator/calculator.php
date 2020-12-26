<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
    <form action="">
        <input type="text" name="num1" placeholder="number 1">
        <br><br>
        <input type="text" name="num2" placeholder="number 2">
        <br><br>
        <select name="operator" id="">
            <option>Select</option>
            <option>Add</option>
            <option>Subtraction</option>
            <option>Multiplication</option>
            <option>Divide </option>
        </select>
        <br><br>
        <button name="submit" value="submit" type="submit">Calculator</button>
    </form>
<p><b> Ans: </b></p>
        <?php
            if (isset($_GET['submit'])){
                $result1 = $_GET['num1'];
                $result2 = $_GET['num2'];
                $operator = $_GET['operator'];
                switch ($operator) {
                    case "Select":
                        echo "<h1 style='color: red'>Select one Option</h1>";
                        break;
                    case "Add":
                        echo $result1+$result2;
                        break;
                    case "Subtraction":
                        echo $result1-$result2;
                        break;
                    case "Multiplication":
                        echo $result1*$result2;
                        break;
                    case "Divide":
                        echo $result1/$result2;
                        break;
                }
            }
        ?>
</body>
</html>