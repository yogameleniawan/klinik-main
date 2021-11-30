<?php
include('koneksi.php');
$id = $_GET['id'];
$no = "DELETE FROM dokter WHERE id_dokter='$id'";
$result = mysqli_query($connect, $no);

header("location:dokter.php?pesan=hapus");
