<?php

include "../config/connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Main CSS -->
    <link rel="stylesheet" href="../resources/css/app.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Login Admin</title>
</head>
<body>

   <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        
        <form action="login.php" method="post" class="form border rounded-3 px-4 py-4">
        <h5 class="text-center fw-bold fs-4">Login Admin</h5>
            <div class="mb-4 mt-4">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" required>
            </div>
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-primary" onclick="message()">Submit</button>
            </div>
            <!-- <div class="message">
                <div class="alert alert-warning" role="alert" id="required-email">
                    Email Harus Diisi Terlebih Dahulu!
                </div>
                <div class="alert alert-warning" role="alert" id="required-password">
                    Password Harus Diisi Terlebih Dahulu!
                </div>
            </div> -->
        </form>
   </div>

   <!-- <script>
    function message(){
        var email = document.getElementById('email')
        var password = document.getElementById('password')

        const warnEmail = document.getElementById('required-email')
        const warnPass = document.getElementById('required-password')

        if(email.value === ''){
            warnEmail.style.display = 'block'
        }else if(password.value === ''){
            warnPass.style.display = 'block'
        }
    }
   </script> -->
</body>
</html>