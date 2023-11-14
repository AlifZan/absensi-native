<?php

include('koneksi.php');

//get id
$nik = $_GET['nik'];

$query = "DELETE FROM tbl_absen WHERE nik = '$nik'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>