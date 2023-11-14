<?php 

include('koneksi.php');

if (isset($_GET["nik"])) {

    $id = $_GET["nik"];
    $jam_keluar = date("H:i:s");
    $query = "UPDATE tbl_absen SET jam_keluar = '$jam_keluar' WHERE nik = '$id' ";
    $result = mysqli_query($connection, $query);

    header('Location: index.php');

    
}

?>