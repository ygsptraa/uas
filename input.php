<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    h1{
      text-align: center;
    }
    .container{
      width: 400px;
      margin: auto;
    }
  </style>
  <title>Input Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
  
  <br/>
  <h1>Input Data Mahasiswa</h1>
  <br/>
  <div class="container">
      <fieldset>
      <form action="proses_inputMahasiswa.php" id="form_Mahasiswa" method="post">
        <p class="name">
          <label for="npm">NPM :</label>
          <input type="text" class="form-control" name="npm" id="npm" placeholder="223307017">
        </p>
        <p>
          <label for="namaMhs">Nama Lengkap Mahasiswa :</label>
          <input type="text" class="form-control"  name="namaMhs" id="namaMhs" placeholder="Rachmad Yoga Saputra" >
        </p>
        <p>
          <label for="prodi">Prodi :</label>
          <input type="text" class="form-control" name="prodi" id="prodi" placeholder="Teknologi Informasi">
        </p>
        <p>
          <label for="alamat">Alamat :</label>
          <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Ngawi">
        </p>
        <p>
          <label for="noHP">NO HP :</label>
          <input type="text" class="form-control" name="noHP" id="noHP" placeholder="contoh 0968787459">
        </p>
      <p>
        <input type="submit" name="input" class="btn btn-primary" value="Simpan" >
      </p>
      </fieldset>
    </form>
  </div>
</body>
</html>