<?php

$conn = mysqli_connect('localhost', 'root', '', 'PerusahaanABC');
$username = mysqli_real_escape_string($conn, $_POST['username']);
$sql = "select * from users where username = '$username'";
$process = mysqli_query($conn, $sql);
$num = mysqli_num_rows($process);
if($num == 0){
    echo "Username masih tersedia";
}else{
    echo " Username tidak tersedia";
}

?>