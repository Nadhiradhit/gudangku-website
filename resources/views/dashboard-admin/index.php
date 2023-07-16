<?php

include './config/connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
    
    session_start();
    if($_SESSION['status']!="login"){
        header("location:index.php?belum=login");
    }

    ?>
</body>
</html>