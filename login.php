<?php
session_start();
$_SESSION['UserAdmin'] = "Hamzah";
?>

<form action="control.php" method="post">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit" value="login">
</form>