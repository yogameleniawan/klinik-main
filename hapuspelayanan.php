<?php
include('koneksi.php');
$id = $_GET['id'];
$no = "DELETE FROM pelayanan WHERE no_pelayanan='$id'";
$result = mysqli_query($connect, $no);

header("location:pelayanan.php?pesan=hapus");
