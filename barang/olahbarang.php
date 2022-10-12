<!doctype html>
<html lang="en">
<?php 
 include "konek.php";
$id ="";
$merek ="";
$kondisi ="";
$kategori ="";
$harga ="";

 if(isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $query = "SELECT * FROM tb_barang WHERE id='$id'";
  $sql = mysqli_query($konek, $query);
  $data = mysqli_fetch_array($sql);
  $merek = $data['merek'];
  $kondisi = $data['kondisi'];
  $kategori = $data['kategori'];
  $harga = $data['harga'];
 }
 
?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
    <h1></h1>
    <div class="container">
    <nav class="navbar bg-light mt-2">
        <div class="container-fluid">
          <a class="navbar-brand">TAMBAH DATA</a>
          
        </div>
      </nav>

      <figure class="text-center">
        <blockquote class="blockquote mt-2 mb-2">
          <p>DATABASE</p>
        </blockquote>
        <figcaption class="blockquote-footer">TAMBAHKAN DATA SE SUAI LIST YANG ADA<cite title="Source Title"> DENGA LIST TERSEBUT</cite></figcaption>
      </figure>
      

      <form action="prosesbarang.php" method="post" <form method="get" action="" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        
  <div class="mb-3 row">
    <label for="merek" class="col-sm-2 col-form-label">merek</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="merek" name="merek" placeholder="merek" value="<?php echo $merek; ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="kondisi" class="col-sm-2 col-form-label">kondisi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kondisi" name="kondisi" placeholder="kondisi" value="<?php echo $kondisi; ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="kategori" class="col-sm-2 col-form-label">kategori</label>
    <div class="col-sm-10">
      <input type="kategori" class="form-control" id="kategori" name="kategori" placeholder="kategori" value="<?php echo $kategori; ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="harga" class="col-sm-2 col-form-label">harga</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="harga" name="harga" placeholder="harga barang" value="<?php echo $harga; ?>">
    </div>
  </div>
</div>
    <div class="mb-3 row">
        <?php
        if(isset($_GET['edit'])){
           echo "<button type='submit' class='btn btn-primary' name='btnProses' value='edit'>SIMPAN PERUBAHAN</button>";
        } else {  
            echo "<button type='submit' class='btn btn-primary' name='btnProses' value='tambah'>TAMBAH DATA</button>";
        }
        ?> 
  
</div>
</form>

 


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    -->
  </body>
</html>