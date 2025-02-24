<?php
//panggil koneksinya
include "config.php";

//tanghkap data id yang dikirim dari index
$id_pegawai = $_GET['id'];

//query untuk hapus data
mysqli_query($koneksi,"DELETE from tb_pegawai where id_pegawai='$id_pegawai'");

header("location:index.php");
