<?php
include "koneksi.php";

if (isset($_POST['input'])) {
  $npm = $_POST['npm'];
  $namaMhs = $_POST['namaMhs'];
  $prodi = $_POST['prodi'];
  $alamat = $_POST['alamat'];
  $nohp = $_POST['noHP'];

  $query = "INSERT INTO t_mahasiswa VALUES ($npm, '$namaMhs', '$prodi', '$alamat', '$nohp')";
  $result = mysqli_query($koneksi, $query);

  if (!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
  }
}

header("location:index.php")
?>