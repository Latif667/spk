<?php
$kode =$_POST['kode'];
$kriteria =$_POST['kriteria'];
$atribut =$_POST['atribut'];
include "../koneksi.php";
$sql="insert into tbl_kriteria (kode, kriteria, atribut) 
values ('$kode','$kriteria','$atribut')";
$hasil=mysqli_query($koneksi,$sql);
//echo "$sql";
if ($hasil) {
 header("location:../index.php?halaman=kriteria&pesan=tambah_sukses");
}else
{
 header("location:../index.php?halaman=kriteria&pesan=tambah_gagal");
}
?>