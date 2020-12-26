<?php include_once 'header.php' ?>
    <section class="index-singup">
        <h1>Sing up</h1>
        <form action="includes/singup.inc.php" method="post">
            <input require class="form-control" type="text" name="name" placeholder="Full Name ...">
            <input class="form-control" type="email" name="email" placeholder="E-Mail">
            <input class="form-control" type="text" name="uid" placeholder="User Name">
            <input class="form-control" type="password" name="pwd" placeholder="Password">
            <input class="form-control" type="password" name="pwdrepeat" placeholder="Type Password Again">
            <button type="submit" name="submit" class="btn btn-info btn-lg btn-block">Sing Up</button>
        </form>

        <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<h1 class='h4' style='color: red; font-weight: bolder'>Fill In All Fields!</h1>";
        }
        
        else if ($_GET["error"] == "invaliduid") {
            echo "<h1 class='h4' style='color: red; font-weight: bolder'>Write a Unique User Name!</h1>";
        } 

        else if ($_GET["error"] == "invalidemail") {
            echo "<h1 class='h4' style='color: red; font-weight: bolder'>Write a Unique Email Id!</h1>";
        } 

        else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<h1 class='h4' style='color: red; font-weight: bolder'>Write Same Password in Both Filed!</h1>";
        } 

        else if ($_GET["error"] == "stmtfalied") {
            echo "<h1 class='h4' style='color: red; font-weight: bolder'>Something Wrong Try Again!</h1>";
        } 

        else if ($_GET["error"] == "usernameoremailtaken") {
            echo "<h1 class='h4' style='color: red; font-weight: bolder'>This User Name is Already Taken try Another User Name!</h1>";
        } 

        else if ($_GET["error"] == "none") {
            echo "<h1 class='h4' style='color: red; font-weight: bolder'>You Are Sing Up Successfully!!!</h1>";
        } 
    }
?>
    </section>
<?php include_once 'footer.php' ?>