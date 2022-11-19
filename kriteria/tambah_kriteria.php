<div class="col-10">
 <h3>Tambah Kriteria</h3>
 <form action="kriteria/aksi_tambah_kriteria.php" method="POST">
   <div class="form-group row">
     <label for="staticEmail" class="col-sm-2 col-form-label">Kode</label>
     <div class="col-sm-10">
       <input type="text"  class="form-control" name="kode">
     </div>
   </div>
   <div class="form-group row">
     <label for="inputPassword" class="col-sm-2 col-form-label">Kriteria</label>
     <div class="col-sm-10">
       <input type="text" class="form-control" name="kriteria">
     </div>
   </div>
   <div class="form-group row">
     <label for="inputPassword" class="col-sm-2 col-form-label">Atribut</label>
     <div class="col-sm-10">
       <input type="text" class="form-control" name="atribut">
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