<?php

include '../config/connect.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$login = mysqli_query($db, "SELECT * FROM admin where 
        email='$email' 
        and password='$password'");

$cek_login = mysqli_num_rows($login);

if($cek_login>0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "Selamat Datang Admin";
    header('location: ../resources/views/dashboard-admin/index.php');
}else{
    echo "<script>
        alert('Terjadi Kesalahan Pada Penginputan')
    </script>";
}

?>