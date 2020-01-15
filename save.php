<?php
 include "conf/koneksi.php";

//if (isset ($_POST['id_barang'])) {
// $sql = mysqli_query($con, "INSERT into barang ( id_barang, id_kategori, nama, deskripsi, jumlah ) 
//                             values (342, 1, 'cek', 'iki deskripsi', 13");

//                                 //    yo OPOhttps://www.w3schools.com/php/php_mysql_insert.asp

//         if ($sql) {
            
//             header('location:index.php');
//         }else{
//             echo "data gagal disimpan";
//         }
        
 //   }
  
 $sql = "INSERT into barang ( id_barang, id_kategori, nama, deskripsi, jumlah ) 
  values ($_POST[id_barang], $_POST[id_kategori], '$_POST[nama]', '$_POST[deskripsi]', $_POST[jumlah])";

 
 if (mysqli_query($con, $sql)) {
                 header('location:index.php');

 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($con);
 }
 
 mysqli_close($con);


?>

