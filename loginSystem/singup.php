<?php include_once 'header.php' ?>
    <section class="index-singup">
        <h1>Sing up</h1>
        <form action="includes/singup.inc.php" method="post">
            <input class="form-control" type="text" name="name" placeholder="Full Name ...">
            <input class="form-control" type="email" name="email" placeholder="E-Mail">
            <input class="form-control" type="text" name="uid" placeholder="User Name">
            <input class="form-control" type="password" name="pwd" placeholder="Password">
            <input class="form-control" type="password" name="pwdrepeat" placeholder="Type Password Again">
            <button type="submit" name="submit" class="btn btn-primary">Sing Up</button>
        </form>
    </section>



<?php include_once 'footer.php' ?>