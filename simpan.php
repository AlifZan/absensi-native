<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nik           = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];
$jabatan       = $_POST['jabatan'];
$jam_masuk = date("H:i:s");
$jam_keluar = NULL;

//query insert data ke dalam database
$query = "INSERT INTO tbl_absen VALUES ('$nik', '$nama_lengkap', '$jabatan', '$jam_masuk', '$jam_keluar')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
$result = mysqli_query($connection, $query);
    //redirect ke halaman index.php 
    header("location: index.php");

?>