<?php
if (isset($_GET['halaman'])) {
 if ($_GET['halaman']=='home') {
  include "home.php";
 }
 elseif ($_GET['halaman']=='alternatif') {
  include "alternatif/alternatif.php";
 }
 elseif ($_GET['halaman']=='tambah_alternatif') {
  include "alternatif/tambah_alternatif.php";
 }
 elseif ($_GET['halaman']=='edit_alternatif') {
  include "alternatif/edit_alternatif.php";
 }
 elseif($_GET['halaman']=='kriteria') {
    include "kriteria/kriteria.php";
 }
 elseif ($_GET['halaman']=='tambah_kriteria') {
    include "kriteria/tambah_kriteria.php";
 }
 elseif ($_GET['halaman']=='edit_kriteria') {
    include "kriteria/edit_kriteria.php";
 }
 elseif ($_GET['halaman']=='penilaian') {
   include "penilaian/js/penilaian.php";
  }
  elseif ($_GET['halaman']=='tambah_penilaian') {
   include "penilaian/tambah_penilaian.php";
  }
  elseif ($_GET['halaman']=='bobot') {
   include "bobot/bobot.php";
  }
  elseif ($_GET['halaman']=='rangking') {
   include "rangking/rangking.php";
  }
  else{
   echo "Halaman tidak ditemukan!";
  }
 }else{
  include "home.php";
 }
 ?>