<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="js/bootstrap.min.js"></script>
    <script src="jquery-3.4.1.slim.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php
    include "conf/koneksi.php";
    $tampil = mysqli_query($con,"Select * from barang");
?>

<!-- <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table> -->

<div class="container ">
    <h2>Tampil Data Barang</h2>
    <p>Menampilkan data-data barang pada inventory</p>
    <a href="add.php"><button type="button" class="btn btn-info btn-sm"><img src='assets/icons/plus.svg' alt='' width='32' height='32'> </button></a>
<table class="table table-striped">
  <thead class="thead-dark">
    <tr >
    
      <th scope="col">No</th>
      <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Kategori</th>
      <th scope="col" >Deskripsi</th>
      <th scope="col">Aksi</th>
      
      
    </tr>
  </thead>
  <tbody>
<?php
    $no=1;
    while($r=mysqli_fetch_array($tampil)){
        echo"
            <tr>
               
                <td>$no</td>    
                <td>$r[id_barang]</td>    
                <td>$r[nama]</td>";

                $datakategori=mysqli_query($con,"Select * from kategori where id_kategori='$r[id_kategori]'");
                $r2=mysqli_fetch_array($datakategori);
        echo"
                <td>$r2[nama_kategori]</td>    
                <td>$r[deskripsi]</td>    
                <td>
                    <button type='button' class='btn btn-success'><img src='assets/icons/gear.svg' alt='' width='32' height='32'></button>
                    <button type='button' class='btn btn-danger'><img src='assets/icons/trash.svg' alt='' width='32' height='32'></button>
                </td>
            </tr>    
                "; 
                $no++;   
    }
?>
  </tbody>
</table>
</div>    
</body>
</html>