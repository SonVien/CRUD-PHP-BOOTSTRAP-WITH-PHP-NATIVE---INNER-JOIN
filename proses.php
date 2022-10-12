<?php
include 'konek.php';
if(isset($_POST['btnProses'])){
    
    $nama =$_POST['nama'];
    $alamat=$_POST['alamat'];
    $email=$_POST['email'];
    $nomor_hp=$_POST['nomor_hp'];
    
    if($_POST['btnProses']=="tambah"){
        $query="INSERT INTO tb_customer VALUES('','$nama','$alamat','$email','$nomor_hp')";
        $sql=mysqli_query($konek,$query);
        if ($sql){
            header('location:index2.php');
        }
    } else {
        $query="UPDATE tb_customer SET nama='$nama',alamat='$alamat',email='$email',nomor_hp='$nomor_hp' WHERE id='$_POST[id]'";
        } 
        $sql = mysqli_query($konek, $query);
        $sql .= " LIMIT 1";
        if ($sql){
        header('location:index2.php');
    
    } }elseif($_GET['hapus']){
        $query="DELETE FROM tb_customer WHERE id='$_GET[hapus]'";
        $sql=mysqli_query($konek, $query);
    
    if ($sql){
        header('location:index2.php');
    }
}
?> 