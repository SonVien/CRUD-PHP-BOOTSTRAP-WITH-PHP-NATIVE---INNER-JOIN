<?php 
include '../controller/konek.php';
 
$username = $_POST['username'];
$password = md5($_POST['password']);
 
$konek = mysqli_query("SELECT * FROM tb_user WHERE username='$username' and password='$password'");
$query = mysqli_num_rows($konek);	
 
?>