<?php
include "header.php";
header( "Cache-Control: max-age=<350>");
?>
<!DOCTYPE html>
<html>
<link href="resources/css/login.css" rel="stylesheet" type="text/css">
        <div class = "login">
            <h2>Sign up</h2>
            <form class = "signup-form" action = "../../doSignup.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="submit">Sign up </button>
            </form>

        </div>

</html>
