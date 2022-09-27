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
include 'database/dbconnection.php';

if(isset($_POST['adduser']))
	{
		$nama = $_POST['nama'];
		$telp = $_POST['telp'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];
		$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT); 
			  
		$tambahuser = mysqli_query($conn,"insert into login (namalengkap, email, password, notelp, alamat) 
		values('$nama','$email','$pass','$telp','$alamat')");
		if ($tambahuser){
		echo " <div class='alert alert-success' style='color:#fff; text-align:center; margin-top:10px;'>
			Berhasil mendaftar, silakan masuk.
		  </div>
		<meta http-equiv='refresh' content='1; url= login.php'/>  ";
		} else { echo "<div class='alert alert-warning'>
			Gagal mendaftar, silakan coba lagi.
		  </div>
		 <meta http-equiv='refresh' content='1; url= register.php'/> ";
		}
		
		mysqli_close($conn); };




?>


<!DOCTYPE html>
<html>
    <head>
        
        <title>
            Register | I-Project
        </title>
        <link rel="icon" href=".\assets\img\account.png">
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href=".\assets\css\style-register.css">
    </head>
    <body>
    <div class="login-box">
	<h2><b>Daftar</b></h2><br>
		<form method="POST">
            <div class="user-box">
                    <input type="text" name="nama" required="yes" minlength="30" maxlength="200">
                    <label>Nama Lengkap</label>
			</div>
            <div class="user-box">
                    <input type="number" name="telp" required="yes"  minlength="10" maxlength="13">
                    <label>Nomor Telepon</label>
			</div>
            <div class="user-box">
                    <input type="text" name="alamat" required="yes"  minlength="30" maxlength="200">
                    <label>Alamat</label>
			</div>
			<div class="user-box">
				<input type="text" name="email" required="yes" minlength="10" maxlength="30">
				<label>Username</label>
			</div>
			<div class="user-box">
				<input type="password" name="pass" required="yes" minlength="8" maxlength="200">
				<label>Password</label>
			</div>
			
			<?php 

			?>
			
			<div class="lupapwd">
				<a href="#" style="color:#fff;">Lupa Password?</a>
			</div>
			
			<div class="d-grid gap-2 mx-auto" style="text-align: center; ">
			<input class="btn btn-outline-primary" type="submit" name="adduser" value="Daftar" required="" style="padding-left:120px ; padding-right:120px; background-color:transparent;  border-color:#03e9f4; border-radius:10px;">
			</div>
			<br><br>
			<div class="btn-daftar">
				<p>Sudah punya akun? <a href="login.php" style="color:#fff;">Masuk</a></p>
			</div>
		</form>
		<?php
		if(isset($_POST['submit'])){
 if(empty($_POST['telp'])) {
 $hp = 'NO HP tidak boleh kosong';
 } else if(!is_numeric($_POST['telp'])) {
 $hp = 'NO HP harus angka';
 } else if(strlen($_POST['telp']) != 12) {
 $hp = 'NO HP harus berjumlah 12 angka';
 } else {
 $hp = 'NO HP berhasil di input';
 }
 echo $hp;
}
?>
	</div>
    </body>

</html>
<script src="./assets/js/function.js"></script>
<script type="text/javascript">
function cekemail(email){
            if(email.indexOf("@")!=-1 && email.indexOf(".")!=-1){
                alert("ini adalah email");
            }
            else{
                alert("ini bukan email");
            }
        }

</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#username').keyup(function() {
        var uname = $('#username').val();
        if(uname == 0) {
            $('#result').text('');
        }
        else {
            $.ajax({
                url: 'cek.php',
                type: 'POST',
                data: 'username='+uname,
                success: function(hasil) {
                    if(hasil > 0) {
                        $('#result').text('Username tidak tersedia');
                    }
                    else {
                        $('#result').text('Username tersedia');
                    }
                }
            });
        }
    });
});

</script>
