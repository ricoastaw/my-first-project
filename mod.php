<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="js/bootstrap.min.js"></script>
    <script src="jquery-3.4.1.slim.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Edit Data</title>
</head>
<body>
<?php

include ("conf/koneksi.php"); 

if (isset ($_GET['id_barang'])) {
    $sql = mysqli_query($con,"select * form barang where id_barang='$_GET[id_barang]'");
    $r = mysqli_fetch_array($sql);

}

?>
<div class="container">
        <h2>Edit Data Barang</h2>
        <p>Menampilkan data-data untuk ditambahkan pada inventory</p>
    </div>
    <form action="edit.php" method="POST" class="container">



    <!-- ID BRG -->
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">ID Barang</label>
            <div class="col-sm-2">
            <input type="text" value=<?php echo $r['id_barang']; ?> class="form-control" id="id_barang" placeholder="Input ID barang" name="id_barang" disabled>
            </div>
        </div>

    <!-- kategori brg -->
        <div class="form-group row-1">
            <label for="" class="col-sm-2 col-form-label ">Kategori Barang</label>
                <select class="custom-select col-sm-2"  id="id_kategori" name="id_kategori" >
                <option value=<?php echo $r['id_barang']; ?> >Pilih Kategori Barang</option>
            <?php 
                include ("conf/koneksi.php");
                $sql = mysqli_query($con,"Select * from kategori"); 
            ?>
                <?php
                while ($r = mysqli_fetch_array($sql)){
                    echo "<option value=$r[id_kategori]>$r[nama_kategori]</option>";
                }
                ?>
                </select>
                <div class="invalid-feedback">Tolong isi data dengan benar!</div>
        </div>
    <!-- nama barang -->
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="nama" placeholder="Nama barang" name="nama" value="<?php echo $r['nama']; ?>">
            </div>
        </div>

    <!-- deskripsi barang -->
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-8">
            <textarea  id="deskripsi" class="form-control" name="deskripsi" rows="3" placeholder="deskripsi barang" value=<?php echo $r['deskripsi']; ?>></textarea>
            <!-- <input type="text" class="form-control" id="deskripsi" textare name="deskripsi"> -->
            </div>
        </div>

        <!-- jumlah -->
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Jumlah Barang</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="jumlah" placeholder="Jumlah" name="jumlah" value=<?php echo $r['jumlah']; ?>>
            </div>
        </div>

        <!-- tanggal -->
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Tanggal Masuk</label>
            <div class="col-sm-8">
            <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" value=<?php echo $r['tgl_masuk']; ?>>
            </div>
        </div> 

        <!-- harga -->
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="harga_jual" placeholder="harga" name="harga_jual" value=<?php echo $r['harga_jual']; ?>>
            </div>
        </div> 

        <!-- foto -->
        <!-- <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-8">
            <input type="url" class="form-control" id="foto" name="foto">
            </div>
        </div>  -->
        
        <!-- submit btn -->
        <div class="col-md-6 text-center"> 
            <button id="submit" name="submit" type="submit" class="btn btn-primary">Update</button> 
        </div>
    </form>
</body>
</html>