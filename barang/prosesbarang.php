<?php
include 'konek.php';
if(isset($_POST['btnProses'])){
    
    $merek =$_POST['merek'];
    $kondisi=$_POST['kondisi'];
    $kategori=$_POST['kategori'];
    $harga=$_POST['harga'];
    
    if($_POST['btnProses']=="tambah"){
        $query="INSERT INTO tb_barang VALUES('','$merek','$kondisi','$kategori','$harga')";
        $sql=mysqli_query($konek,$query);
        if ($sql){
            header('location:barang/barang.php');
        }
    } else {
        $query="UPDATE tb_barang SET merek='$merek',kondisi='$kondisi',kategori='$kategori',merek='$merek' WHERE id='$_POST[id]'";
        } 
        $sql = mysqli_query($konek, $query);
        if ($sql){
        header('location:barang.php');
    }
    } elseif($_GET['hapus']){
        $query="DELETE FROM tb_barang WHERE id='$_GET[hapus]'";
        $sql=mysqli_query($konek, $query);
    
    if ($sql){
        header('location:barang.php');
    }
}
?> 