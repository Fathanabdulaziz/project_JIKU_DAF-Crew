<?php

    include "service/database_LoginPasien.php";

    if (isset($_POST['login'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password =$_POST['Password'];
        
        $sql = "INSERT INTO akun_Users (username, email, password) VALUES
        ('$username', '$email', '$password')";

        if ($db->query($sql)){
            echo    "Ok Masuk";
        }
        else {
            echo "gagal";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu login</title>

    <link rel="stylesheet" href="CSS/loginPasien.css">
</head>

<body>
    <?php 
        include "Layout/loginPasien.html" 
    ?>

</body>

</html>