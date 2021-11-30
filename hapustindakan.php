<?php
include('koneksi.php');
$id = $_GET['id'];
$no = "DELETE FROM tindakan WHERE id_tindakan='$id'";
$result = mysqli_query($connect, $no);

header("location:tindakan.php?pesan=hapus");
