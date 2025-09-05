<?php include"../lib/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Admin</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="../assets/img/gambar.png"/> 
  <link rel="stylesheet" type="text/css" href="../assets/css/fonts/material-design-iconic-font.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
</head>
<body>  
  <div class="limiter">
    <div class="container-login100" style="background-image: url('../assets/img/32466.jpg');">
      <div class="wrap-login100" style="background: linear-gradient(#7579ff, #4f5467);">
        <form class="login100-form validate-form" method="POST" action="prologin.php">
          <span class="login100-form-logo">
            <img src="../assets/img/gambar.png" style="width:70px; height: 70px;">
          </span>
          <span class="login100-form-title p-b-34 p-t-27">
            Login
          </span>
          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="username" placeholder="Username" autocomplete="off">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>
          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
          </div>
          <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="ckb1">
              Remember me
            </label>
          </div>
          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Login
            </button>
          </div>
          <div class="text-center p-t-90">
            <a class="txt1" href="#">
              Forgot Password?
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div id="dropDownSelect1"></div>
</body>
</html>