<?php
$id_alternatif=$_POST['id_alternatif'];
$kode =$_POST['kode'];
$alternatif =$_POST['alternatif'];
$keterangan =$_POST['keterangan'];
include "../koneksi.php";
$sql="update tbl_alternatif set kode = '$kode',
 alternatif='$alternatif',
 keterangan='$keterangan' where id_alternatif='$id_alternatif'";
$hasil=mysqli_query($koneksi,$sql);
//echo "$sql";
if ($hasil) {
 header("location:../index.php?halaman=alternatif&pesan=edit_sukses");
}else
{
 header("location:../index.php?halaman=alternatif&pesan=edit_gagal");
}
?>