<?php
include ("conf/koneksi.php");

// $sql = "UPDATE barang set ($_POST[id_barang], $_POST[id_kategori], '$_POST[nama]', 
//         '$_POST[deskripsi]', $_POST[jumlah], '$_POST[tgl_masuk]', '$_POST[harga_jual]')
//         where barang.id_barang=$_POST[id_barang]";

$sql = mysqli_query($con, "UPDATE barang SET id_barang ='$_POST[id_barang]',
                                                id_kategori = '$_POST[id_kategori]',
                                                nama = '$_POST[nama]',
                                                deskripsi = '$_POST[deskripsi]',
                                                jumlah = '$_POST[jumlah]',
                                                tgl_masuk = '$_POST[tgl_masuk]',
                                                harga_jual = '$_POST[harga_jual]'
                                                where id_barang='$_POST[id_barang]'
                                                        ");


if (mysqli_query($con, $sql)) {
               header('location:index.php');

} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

?>