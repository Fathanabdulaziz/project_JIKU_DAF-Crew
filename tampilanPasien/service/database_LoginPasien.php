<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "login_pasien_jiku";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if ($db -> connect_error){
    echo "Koneksi database rusak";
    die ("error!");
}

?>