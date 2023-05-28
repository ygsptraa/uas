<?php
include 'koneksi.php';

if (isset($_GET['npm'])) {
  $npm = ($_GET['npm']);

  $query = "SELECT * FROM t_mahasiswa WHERE npm = '$npm'";
  $result = mysqli_query($koneksi, $query);

  if (!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
  }

  $data = mysqli_fetch_assoc($result);
  $npm = $data["npm"];
  $namaMhs = $data["namaMhs"];
  $prodi = $data["prodi"];
  $alamat = $data["alamat"];
  $noHP = $data['noHP'];
}else {
  header ("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
  <title>edit Mahasiswa</title>
  <style>
    h1 {
      text-align: center;
    }
    .container {
      width: 400px;
      margin: auto;
    }
  </style>
</head>
<body>
  <h1>Edit Data</h1>
    
  <div class="container">
  
    <form action="proses_editMahasiswa.php" id="form_mahasiswa" method="post" >
      <fieldset>
        <p class="name">
          <label for="npm">NPM :</label>
          <input type="text" class="form-control" name="npm" id="npm" value="<?php echo $npm; ?>">
        </p>
        <p>
          <label for="namaMhs">Nama Mahasiswa :</label>
          <input type="text" class="form-control"  name="namaMhs" id="namaMhs" value="<?php echo $namaMhs; ?>">
        </p>
        <p>
          <label for="prodi">Prodi :</label>
          <input type="text" class="form-control" name="prodi" id="prodi" value="<?php echo $prodi; ?>">
        </p>
        <p>
          <label for="alamat">Alamat :</label>
          <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $alamat; ?>">
        </p>
        <p>
          <label for="noHP">NO HP :</label>
          <input type="text" class="form-control" name="noHP" id="noHP" value="<?php echo $noHP; ?>">
        </p>
      <p>
        <input type="submit" name="edit" class="btn btn-primary" value="Simpan">
      </p>
      </fieldset>
    </form>
  </div>
</body>
</html>