<?php

require 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Web 3KA03</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
</head>

<body>
<!-- Image and text -->

<nav class="navbar navbar-light" style="background: linear-gradient(to right, #1C84A6, #173987); display: flex; justify-content: space-between; align-items: center;">
  <a class="navbar-brand" href="index.php" style="color: white; font-weight: bold; display: flex; align-items: center;">
    <img src="images/icon.png" width="80" height="30" class="d-inline-block align-top" alt="" style="margin-right: 20px;">
    HOME
  </a>
  <a href="profile.php" style="color: white; font-weight: bold;">PROFIL KAMPUS</a>
</nav>


<div class="container">
    <div class="row my-2">
        <div class="col-md">
                <h3 class="text-center fw-bold text-uppercase">WEBSITE ABSENSI MAHASISWA</h3>
        </div>
    </div>
</div>
    <!-- Login  Form -->
    <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        
                    </div>
                    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form action = "cek_login.php" method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username" autocomplete="off" required/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" required/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="https://www.facebook.com"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="https://mobile.twitter.com"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="https://accounts.google.com"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
    <!-- Login  Form -->



    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>

</html>