<?php include_once 'header.php' ?>
    <section class="index-singup">
        <h1>Log In</h1>
        <form action="includes/login.inc.php" method="post">
            <input class="form-control" type="text" name="uid" placeholder="User Name/E-Mail ...">
            <input class="form-control" type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Log In</button>
        </form>


<?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<h1 class='h4'>Fill In All Fields!</h1>";
        }
        
        else if ($_GET["error"] == "wronglogin") {
            echo "<h1 class='h4'>Wrong Login Info!!!</h1>";
            } 
        }
?>
    </section>



<?php include_once 'footer.php' ?>