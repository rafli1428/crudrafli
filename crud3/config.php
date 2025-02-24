<?php
$localhost="localhost";
$username="root";
$password="";
$database="crud_3";

//membuat koneksi
$koneksi= mysqli_connect($localhost, $username, $password, $database);

//cek koneksi
if(!$koneksi){
    die("koneksi gagal:".mysqli_connect_error());
}
