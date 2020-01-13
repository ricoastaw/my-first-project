<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery-3.4.1.slim.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Add Data</title>
</head>
<body>
    <div class="container">
        <h2>Tampil Data Barang</h2>
        <p>Menampilkan data-data barang pada inventory</p>
    </div>
    <form action="save.php" method="POST" class="container">

    <!-- ID BRG -->
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">ID Barang</label>
            <div class="col-sm-2">
            <input required type="text" class="form-control" id="id" placeholder="Input ID barang" name="id_barang">
            </div>
        </div>

    <!-- kategori brg -->
        <div class="form-group row-1">
            <label for="" class="col-sm-2 col-form-label ">Kategori Barang</label>
                <select class="custom-select col-sm-2" required>
                    <option value="">Pilih Kategori Barang</option>
                    <option value="1">Pakaian</option>
                    <option value="2">Elektronik</option>
                    <option value="3">Gadget</option>
                    <option value="4">Alat Dapur</option>
                </select>
                <div class="invalid-feedback">Tolong isi data dengan benar!</div>
        </div>
    <!-- nama barang -->
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="nama" placeholder="Nama barang" name="nama">
            </div>
        </div>

    <!-- deskripsi barang -->
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-8">
            <textarea id="my-textarea" class="form-control" name="" rows="3">Isikan Deskripsi Barang</textarea>
            <!-- <input type="text" class="form-control" id="deskripsi" textare name="deskripsi"> -->
            </div>
        </div>

    </form>
</body>
</html>