<?php
setcookie("cookies","Test",time() + 3600, "/");
if(count($_COOKIE) > 0){
    echo "Good The Cookies Are Enabled";
}
else {
    echo "Try to Enable the cookeis for better serves";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="text" name="username" />
<input type="submit" value="Send" />
</form>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
<input type="text" name="username" />
<input type="submit" value="Send" />
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            // echo $_SERVER['REQUEST_METHOD'];
             echo $_REQUEST['username'];
}
else{
    echo "You cant browse this Page Directory";
    echo $_REQUEST['username'];
    
}
?>
<a href="login.php">login</a>
</body>
</html>