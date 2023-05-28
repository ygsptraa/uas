<?php
include "koneksi.php";

if (isset($_GET['npm'])) {

  $npm = $_GET['npm'];

  $query = "DELETE FROM t_mahasiswa where npm='$npm'";
  $result = mysqli_query($koneksi, $query);

  if (!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
  }
}

header("location:index.php")
?>