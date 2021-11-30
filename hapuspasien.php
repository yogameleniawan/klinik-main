<?php
include('koneksi.php');
$id = $_GET['id'];
$no = "DELETE FROM pasien WHERE id_pasien='$id'";
$result = mysqli_query($connect, $no);

header("location:pasien.php?pesan=hapus");
