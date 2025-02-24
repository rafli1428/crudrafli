<?php
include "config.php";

//Menangkap Data
$nama_pegawai=$_POST['nama_pegawai'];
$jk=$_POST['jk'];
$telepon=$_POST['telepon'];
$alamat=$_POST['alamat'];


//input data kedalam database
mysqli_query($koneksi, "INSERT into tb_pegawai values ('','$nama_pegawai','$jk','$telepon','$alamat')");

header("location:index.php");