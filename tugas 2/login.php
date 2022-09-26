<!-- this page made by :
Isa Iman Muhammad
20051397019
2020A - D4 Manajemen Informatika -->
<?php
session_start();
if(!isset($_SESSION['log'])){
	
} else {
	header('location:index.php');
};
include './database/dbconnection.php';
date_default_timezone_set("Asia/Bangkok");
$timenow = date("j-F-Y-h:i:s A");

	if(isset($_POST['login']))
	{
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pass = mysqli_real_escape_string($conn,$_POST['pass']);
	$queryuser = mysqli_query($conn,"SELECT * FROM login WHERE email='$email'");
	$cariuser = mysqli_fetch_assoc($queryuser);
		
		if( password_verify($pass, $cariuser['password']) ) {
			$_SESSION['id'] = $cariuser['userid'];
			$_SESSION['notelp'] = $cariuser['notelp'];
			$_SESSION['name'] = $cariuser['namalengkap'];
			$_SESSION['log'] = "Logged";
			header('location:index.php');
		} else {
			echo 'Username atau password salah';
			header("location:login.php");
		}		
	}

?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>
            Login | I-Project
        </title>
        <link rel="icon" href=".\assets\img\account.png">
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href=".\assets\css\style-login.css">


        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href=".\assets\bootstrap\css\bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href=".\assets\bootstrap\css\bootstrap-grid.css.map">
        <link rel="stylesheet" type="text/css" href=".\assets\bootstrap\css\bootstrap-grid.min.css">
        <link rel="stylesheet" type="text/css" href=".\assets\bootstrap\css\bootstrap-grid.min.css.map">
        <link rel="stylesheet" type="text/css" href=".\assets\bootstrap\css\bootstrap-reboot.css">
        <link rel="stylesheet" type="text/css" href=".\assets\bootstrap\css\bootstrap-reboot.css.map">
        <link rel="stylesheet" type="text/css" href=".\assets\bootstrap\css\bootstrap-reboot.min.css">
        <link rel="stylesheet" type="text/css" href=".\assets\bootstrap\css\bootstrap-reboot.min.css.map">
        <link rel="stylesheet" type="text/css" href=".\assets\bootstrap\css\bootstrap.css">
        <link rel="stylesheet" type="text/css" href=".\assets\bootstrap\css\bootstrap.css.map">
        <link rel="stylesheet" type="text/css" href=".\assets\bootstrap\css\bootstrap.min.css.map">
        <link rel="stylesheet" type="text/css" href=".\assets\bootstrap\css\bootstrap.min.css">

        <!-- akhir bootstrap -->
	
		
    </head>
    <body>
	<div class="login-box">
	<h2><b>Masuk</b></h2>
		<form method="POST">
			<div class="user-box">
				<input type="text" name="email" autocomplete="on" required="">
				<label>Username</label>
			</div>
			<div class="user-box">
				<input type="password" name="pass" required="">
				<label>Password</label>
			</div>
			
			
			
			<div class="lupapwd">
				<a href="./lupa-password.php" style="color:#fff;">Lupa Password?</a>
			</div>
			
			<div class="d-grid gap-2 mx-auto" style="text-align: center; ">
			<input class="btn btn-outline-primary" type="submit" name="login" value="Masuk" required="" style="padding-left:120px ; border-radius:10px; padding-right:120px; border-color:#;">
			</div>
			<br><br>
			<div class="btn-daftar">
				<p>Sudah punya akun? <a href="register.php" style="color:#fff;">Daftar</a></p>
			</div>
		</form>
	</div>
	

    </body>
</html>
