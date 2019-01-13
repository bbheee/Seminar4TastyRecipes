<?php
include "header.php";
header( "Cache-Control: max-age=<350>");
?>
<!DOCTYPE html>
<html lang="en">
<link href="resources/css/login.css" rel="stylesheet" type="text/css">
<div>
<div class = "login" id ="logouts">
    <form id="logout">
    <h2>You have logged in!</h2>
    <button id="logout-btn" type ="submit" name="submit">Logout</button>
    </form>
</div>
</div>
</html>
