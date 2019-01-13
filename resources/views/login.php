<?php
include "header.php";
header( "Cache-Control: max-age=<350>");
?>

<!DOCTYPE html>
<html lang="en">

<link href="resources/css/login.css" rel="stylesheet" type="text/css">
  <div>
        <div class = "login" id ="login">
            <form id="logins">
                <input id= "login-user" type="text" name="username" placeholder="username" required>
                <input id= "login-pwd" type="password" name="password" placeholder="password" required>
                <button id= "login-btn" type="submit" name="submit">Login</button>
            </form>
            <a href="../../showSignup.php">Sign up here!</a>
        </div>
</div>
</html>
