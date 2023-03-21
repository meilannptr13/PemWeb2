<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="dist_login/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(dist_login/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login PMB</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form method="POST" action="index.php" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<input type="submit" name="login" value="login" class="form-control btn btn-primary submit px-3">
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="dist_login/js/jquery.min.js"></script>
  <script src="dist_login/js/popper.js"></script>
  <script src="dist_login/js/bootstrap.min.js"></script>
  <script src="dist_login/js/main.js"></script>

	</body>
</html>
<?php
session_start();
// cek dulu apakah user sudah submit form login apa belum

if (isset($_POST['login'])){
// ambil data dari form login yang disubmit oleh user
$username = $_POST['username'];
$password = $_POST['password'];

// validasi username dan password yang disubmit oleh user
// lakukan perbandingan dengan nilai hard_codde atau username dan password nya
if ($username == "admin" && $password == '12345'){
// jika nilai username dan password yang di inputkan user sama dengan nilai yang ditentukan 
// arahkan ke halaman dashboard
// set session username
    $_SESSION['username'] = $username;
    header("Location: home.php");
    exit();
}else{
// jika username dan password berbeda, redirect atau tetap dihalaman index.php/login
$_SESSION['error'] = "Username atau password salah!";
header("Location: index.php"); //redirect kembali kehalaman login
exit();
}
}
?>
