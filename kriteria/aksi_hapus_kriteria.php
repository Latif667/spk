<?php
include "../koneksi.php";
$sql="delete from tbl_kriteria where id_kriteria='$_GET[id_kriteria]'";
mysqli_query($koneksi,$sql);
//echo "$sql";
header("location:../index.php?halaman=kriteria");
?>