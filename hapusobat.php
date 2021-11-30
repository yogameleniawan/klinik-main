<?php
include('koneksi.php');
$id = $_GET['id'];
$no = "DELETE FROM obat WHERE id_obat='$id'";
$result = mysqli_query($connect, $no);

header("location:obat.php?pesan=hapus");
