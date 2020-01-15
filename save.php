<?php
 include "conf/koneksi.php";

if (isset ($_POST['id_barang'])) {
$sql = mysqli_query($con, "INSERT into barang (id_barang, id_kategori, nama, deskripsi, jumlah ) 
                            values ('$_POST[id_barang]', '$_POST[id_kategori]', '$_POST[nama]', '$_POST[deskripsi]', '$_POST[jumlah]')");

                                    

        if (sql) {
            
            header('location:index.php');
        }else{
            echo "data gagal disimpan";
        }
        
    }
  

?>