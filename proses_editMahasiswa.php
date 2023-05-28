<?php

if (isset($_POST['edit'])) {
  include "koneksi.php";

  $npm = $_POST['npm'];
  $namaMhs = $_POST['namaMhs'];
  $prodi = $_POST['prodi'];
  $alamat = $_POST['alamat'];
  $noHP = $_POST['noHP'];

  $query = "UPDATE t_mahasiswa set npm = '$npm', namaMhs = '$namaMhs' , prodi = '$prodi' , alamat = '$alamat' , noHP = '$noHP' where npm = '$npm'";
  $result = mysqli_query($koneksi, $query);

  if (!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
  }
}

header("location:index.php")
?>