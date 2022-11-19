<?php
$id_kriteria=$_POST['id_kriteria'];
$kode =$_POST['kode'];
$kriteria =$_POST['kriteria'];
$atribut =$_POST['atribut'];
include "../koneksi.php";
$sql="update tbl_kriteria set kode = '$kode',
 kriteria='$kriteria',
 atribut='$atribut' where id_kriteria='$id_kriteria'";
$hasil=mysqli_query($koneksi,$sql);
//echo "$sql";
if ($hasil) {
 header("location:../index.php?halaman=kriteria&pesan=edit_sukses");
}else
{
 header("location:../index.php?halaman=kriteria&pesan=edit_gagal");
}
?>