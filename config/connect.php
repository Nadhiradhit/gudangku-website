<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "db_gudang";

$db = mysqli_connect($server,$user,$password,$database);

if(!$db){
    die("<script>
    alert('Gagal mengambil sebuah database')
    </script>".mysqli_connect_error());
}


?>