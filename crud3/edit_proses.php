<?php
include "config.php";

//Tangkap Data Dari form Edit
$id_pegawai=$_POST['id_pegawai'];
$nama_pegawai=$_POST['nama_pegawai'];
$jk=$_POST['jk'];
$telepon=$_POST['telepon'];
$alamat=$_POST['alamat'];


//query update datanya
mysqli_query($koneksi,"UPDATE tb_pegawai SET nama_pegawai='$nama_pegawai', jk='$jk', telepon='$telepon', alamat='$alamat' WHERE id_pegawai='$id_pegawai'");

header("location:index.php");