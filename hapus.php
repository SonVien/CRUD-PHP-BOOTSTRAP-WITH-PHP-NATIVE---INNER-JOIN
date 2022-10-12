<?php
include 'konek.php';

$id = $_GET['id'];
mysqli_query($konek,"DELETE * FROM tb_customer WHERE id='$id'");
$sql=mysqli_query($konek,$query);


header('location:index2.php');

?>
