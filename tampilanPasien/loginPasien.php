<?php
    if (isset($_POST['login'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password =$_POST['Password'];
        echo $username . ' ' . $email . ' ' . $password ;
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu login</title>

    <link rel="stylesheet" href="loginPasien.css">
</head>

<body>
    <?php 
        include "loginPasien.html" 
    ?>

</body>

</html>