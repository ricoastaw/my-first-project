<?php
 include "conf/koneksi.php";

//if (isset ($_POST['id_barang'])) {
// $sql = mysqli_query($con, "INSERT into barang ( id_barang, id_kategori, nama, deskripsi, jumlah ) 
//                             values (342, 1, 'cek', 'iki deskripsi', 13");

//                                

//         if ($sql) {
            
//             header('location:index.php');
//         }else{
//             echo "data gagal disimpan";
//         }
        
 //   }
  
 $sql = "INSERT into barang ( id_barang, id_kategori, nama, deskripsi, jumlah, tgl_masuk, harga_jual ) 
  values ($_POST[id_barang], $_POST[id_kategori], '$_POST[nama]', '$_POST[deskripsi]', $_POST[jumlah], '$_POST[tgl_masuk]', '$_POST[harga_jual]')";

 
 if (mysqli_query($con, $sql)) {
                 header('location:index.php');

 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($con);
 }
 
 mysqli_close($con);


?>

