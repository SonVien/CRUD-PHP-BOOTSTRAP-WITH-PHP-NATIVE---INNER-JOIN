<!DOCTYPE html>
<?php 
 include "konek.php";
 $sql = "SELECT * FROM tb_customer";
?>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous" />
    <title>DATABSE WEBSITE SANDI</title>
  </head>
  <body>
    <div class="container-lg">
      <nav class="navbar bg-info mt-2">
        <div class="container-fluid">
          <a class="navbar-brand">DATABASE SANDI RPL</a>
          <nav class="navbar bg-info">
  <form class="container-fluid justify-content-start">
    <button class="btn btn-success me-2" type="button">REFRESH</button>
    <a href="index2.php" class="d-grid gap-2 d-md-block ">
    <button class="btn btn-success me-2" type="button">BACK</button>
    </a>
  </form>
</nav>
        </div>
      </nav>

      <figure class="text-center">
        <blockquote class="blockquote mt-2 mb-2">
          <p>DATABASE</p>
        </blockquote>
        <figcaption class="blockquote-footer">TAMBAH DATABASE CUSTOMER<cite title="Source Title">SESUAI DENGAN TABLE</cite></figcaption>
      </figure>

      <table class="table table-bordered border-success table-info table-striped table-hover table-responsive table-responsive-lg">
        <thead>
          <tr>
            <th scope="col">no</th>
            <th scope="col">nama</th>
            <th scope="col">alamat</th>
            <th scope="col">email</th>
            <th scope="col">nomor_hp</th>
            <th scope="col">merek</th>
            <th scope="col">kondisi</th>
            <th scope="col">kategori</th>
            <th scope="col">harga</th>
            <th scope="col">emoney</th>
            <th scope="col">mbanking</th>
            <th scope="col">id_transaksi</th>
            

            <!-- <th scope="col">edit</th> -->
            <!-- <th scope="col">delete</th> -->
          </tr>

          <a href = "olah.php" class="d-grid gap-2 d-md-block mb-3">
          <button class="btn btn-success" type="button">tambah data</button>
        </div>

        </thead>
          <tbody class="table-group-divider">
          <?php
          $query="select c.nama, c.alamat, c.email, c.nomor_hp, b.merek, b.kondisi, b.kategori, b.harga, p.emoney, p.mbanking, p.id_transaksi from tb_customer c inner join tb_barang b on c.id_barang inner join tb_pembayaran p on c.id_pembayaran =p.id;;";
          

          $sql=mysqli_query($konek,$query);
          $no=1;
          ($data=mysqli_fetch_assoc($sql));{
          ?>
          
          <tr>
            <th scope="row"><?php echo $no; ?></th>
    
            <td><?php echo $data['nama'];?></td>
            <td><?php echo $data['alamat'];?></td>
            <td><?php echo $data['email'];?></td>
            <td><?php echo $data['nomor_hp'];?></td> 
            <td><?php echo $data['merek'];?></td> 
            <td><?php echo $data['kondisi'];?></td> 
            <td><?php echo $data['kategori'];?></td> 
            <td><?php echo $data['harga'];?></td>
            <td><?php echo $data['emoney'];?></td>
            <td><?php echo $data['mbanking'];?></td>
            <td><?php echo $data['id_transaksi'];?></td>
            <?php
          $no++;
          }
          ?>
            <!-- <td> 
            <a href="olah.php?edit=<?php echo $data['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-vector-pen" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828L10.646.646zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z"/>
            <path fill-rule="evenodd" d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086.086-.026z"}/>
            </svg>
            </td>
            </a>

            <td>
            <a href="proses.php?hapus=<?php echo $data['id']; ?>" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
            </svg>
            </td>
            </a> 
          </tr>-->
         
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>