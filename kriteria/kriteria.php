<?php
include "koneksi.php";
$slq="select * from tbl_kriteria";
$hasil=mysqli_query($koneksi,$slq);
?>
<div class="col-10">
 <a href="index.php?halaman=tambah_kriteria">
 <input style="float: left;" type="button" class="btn btn-primary" value="Tambah" name="" style="margin-bottom:5px ">
 </a>
 <h3 style="float: left;"> &nbsp;Tabel Data Kritera</h3>
 <table class="table table-bordered">
  <thead>   
   <tr style="font-weight: bold">
    <td width="5%">No.</td>
    <td width="30%">Kode</td>
    <td width="35%">Nama kriteria</td>
    <td width="15%">Atribut</td>
    <td width="15%">Aksi</td>
   </tr>
  </thead>
  <tbody>
   <?php
   $no=1;
   while ($row=mysqli_fetch_array($hasil)) {
   ?>
   <tr>
    <td><?php echo $no++?></td>
    <td><?php echo $row['kode']?></td>
    <td><?php echo $row['kriteria']?></td>
    <td><?php echo $row['atribut']?></td>
    <td>
    <a href="index.php?halaman=edit_kriteria&id_kriteria=<?php echo $row['id_kriteria'] ?>">
     <input type="button" value="Edit" class="btn btn-warning" name="">
     </a>
     <a onclick="return confirm('Kamu Yakin?')" href="kriteria/aksi_hapus_kriteria.php?id_kriteria=<?php echo $row['id_kriteria'] ?>">
     <input type="button" value="Hapus" class="btn btn-danger" name="">
     </a>
    </td>
   </tr>
   <?php
   }
   ?>
  </tbody>
 </table>
</div>