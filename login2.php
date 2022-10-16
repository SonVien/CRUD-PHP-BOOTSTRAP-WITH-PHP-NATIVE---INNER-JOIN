<?php 
include 'controller/konek.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$query = mysqli_query("SELECT * from tb_user where username='$username' and password='$password'");
$sql = mysql_num_rows($konek);
echo $sql;
?>