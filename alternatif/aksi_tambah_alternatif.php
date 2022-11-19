<?php
$kode =$_POST['kode'];
$alternatif =$_POST['alternatif'];
$keterangan =$_POST['keterangan'];
include "../koneksi.php";
$sql="insert into tbl_alternatif (kode, alternatif, keterangan) 
values ('$kode','$alternatif','$keterangan')";
$hasil=mysqli_query($koneksi,$sql);
//echo "$sql";
if ($hasil) {
 header("location:../index.php?halaman=alternatif&pesan=tambah_sukses");
}else
{
 header("location:../index.php?halaman=alternatif&pesan=tambah_gagal");
}
?>