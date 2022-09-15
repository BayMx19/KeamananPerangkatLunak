<?php
error_reporting();
session_start();
include './database/dbconnection.php';

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<title>
            I-Project
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
	
		
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
  
    <title>Berhasil Login</title>
    <script type="text/javascript">
        function valid()
        {
        if(document.forgot.password.value!= document.forgot.confirmpassword.value)
        {
            alert("Password and Confirm Password Field do not match  !!");
            document.forgot.confirmpassword.focus();
            return false;
        }
        return true;
        }
    </script>
</head>
<body>
    
    <div class="login-box" style="width:360px;">
	
			
				<?php
				if(!isset($_SESSION['log'])){
					echo '
                    <a href="register.php" style="text-align:center;"><div class="btn btn-outline-primary" style="padding-left:120px; padding-right:120px; border-color:#03e9f4; border-radius:10px;">
					 Daftar
                    </div></a> <br> <br>
                    <a href="login.php"><div class="btn btn-outline-primary" style="padding-left:120px; padding-right:118px; border-color:#03e9f4; border-radius:10px;">

					Masuk
                    </div></a>
					';
				} else {
					
					if($_SESSION['name']){
					echo '
					<h2>Selamat Datang, ' . $_SESSION["name"] .'!</h2>
					<a href="logout.php" class="btn"><div class="btn btn-outline-primary" style="padding-left:120px; padding-right:120px; border-color:#03e9f4; border-radius:10px;">
           Logout
            </div></a>
					';
					};
                }
					
				
				?>
					
				
			<!-- <div class="product_list_header">  
					<a href="cart.php"><button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					 </a>
			</div> -->
			<div class="clearfix"> </div>
		</div>
	</div>
</body>
</html>