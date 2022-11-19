<?php
include "koneksi.php";
$sql="select * from tbl_kriteria where id_kriteria='$_GET[id_kriteria]'";
$hasil=mysqli_query($koneksi,$sql);
$row=mysqli_fetch_array($hasil);
?>
<div class="col-10">
 <h3>Edit Kriteria</h3>
 <form action="kriteria/aksi_edit_kriteria.php" method="POST">
   <div class="form-group row">
     <label for="staticEmail" class="col-sm-2 col-form-label">Kode</label>
     <div class="col-sm-10">
     <input type="hidden" name="id_kriteria" value="<?php echo $row['id_kriteria'] ?>">
       <input type="text"  class="form-control" name="kode" value="<?php echo $row['kode'] ?>">
     </div>
   </div>
   <div class="form-group row">
     <label for="inputPassword" class="col-sm-2 col-form-label">Kriteria</label>
     <div class="col-sm-10">
       <input type="text" class="form-control" name="kriteria" value="<?php echo $row['kriteria'] ?>">
     </div>
   </div>
   <div class="form-group row">
     <label for="inputPassword" class="col-sm-2 col-form-label">Atribut</label>
     <div class="col-sm-10">
       <input type="text" class="form-control" name="atribut" value="<?php echo $row['atribut'] ?>">
     </div>
   </div>
   <div class="form-group row">
     <label for="inputPassword" class="col-sm-2 col-form-label"></label>
     <div class="col-sm-10">
       <input type="submit" class="btn btn-success" value="Simpan">
     </div>
   </div>
 </form>
</div>