<?php
session_start();
if (!isset($_SESSION['log'])){
  echo "<script>alert('Anda Harus Konfirmasi Akun Dahulu');document.location.href='konfirmasi-akun.php';</script>";
    exit;
    // return var_dump($_SESSION);
}

?>
<?php             
include "database/dbconnection.php";

	
if (isset($_POST['submit'])) {

	$pass = password_hash($_POST["pass"]);
	mysqli_query($conn, "UPDATE user SET pass ='$pass' WHERE email='$email'");
	echo "<script> alert('Password Berhasil diganti');document.location.href='login.php';</script>";	
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
	<h2><b>Ganti Password</b></h2>
		<form method="POST">
			
			<div class="user-box">
				<input type="password" name="pass" required="">
				<label>Password</label>
			</div>
			
			<div class="d-grid gap-2 mx-auto" style="text-align: center; ">
			<input class="btn btn-outline-primary" type="submit" name="submit" value="Submit" required="" style="padding-left:120px ; border-radius:10px; padding-right:120px; border-color:#;">
			</div>
			
		</form>
	</div>
	

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>