<?php
 session_start();
$GLOBALS['supAdimn'] = "Al-Hamzah";
$admins = array("Hamzah","Hassen","AbdAlhab","Ali");
$username = $_POST['username'];
// echo 'You send the data with '.$_SERVER['REQUEST_METHOD']. "<br>";
if($_SERVER['REQUEST_METHOD']){
if(in_array($username,$admins)){ 
    echo "Welcome: " . $username . " To Control Panel for Admin ".$_SESSION['UserAdmin'] ;
}
else{
    
    echo "Sorry this Username is not Exist try to connect with $supAdimn";
    // phpinfo();
}
}


?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1> M</H1>
    <?php
    // echo "YOUR Username is " .$_POST['username']. "<br>" ;
    // echo "YOUR Password is " . $_POST['password'] . "<br>";
    ?>
</body>
</html> -->