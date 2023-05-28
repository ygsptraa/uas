<?php
include "koneksi.php";
include "cek.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>YooG</title>
    <link rel="shortcut icon" href="images/umbrella.svg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar transparent navbar-expand-lg navbar-dark shadow fixed-top navbar-scroll">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php" ><img src="images/user.png" height="30px"/>  <?php echo "$username" ?></a></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="input.php">Input Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="Aboutme.html"> Tentang Saya</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="pendaftaran.php"> Registrasi</a>
            </li>
            <li class="nav-item"><a class="nav-link active" href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar-->
    <!--Jumbotron-->
    <div class="jumbotron">
        <br />
        <br />
        <h1 class="display-4">
          Siswa Yang Terdaftar KIP Kuliah <br />
        </h1>
        <hr class="w-50" color="#ff0000" />
    <?php 
      if(isset($_GET['search'])){
        $search = $_GET['search'];
      }
      ?>

    <br />
    <div class="container">
    <table class="my-3 table table-bordered">
    <tr class="table-dark">
      <th style="text-align: center;">NPM</th>
      <th style="text-align: center;">Nama Mahasiswa</th>
      <th style="text-align: center;">Prodi</th>
      <th style="text-align: center;">Alamat</th>
      <th style="text-align: center;">No HP</th>
      <th style="text-align: center;">Pilihan</th>
      </tr>
      <?php
              if(isset($_GET['search'])){
                  $search = $_GET['search'];
                  $query = "SELECT * FROM t_mahasiswa WHERE namaMhs='$search'";				
              } else{
                  $query = "SELECT * FROM t_mahasiswa ORDER BY namaMhs ASC ";		
              }

      $result = mysqli_query($koneksi,$query);

      if(!$result) {
          die ("Query Error : ".mysqli_errno($koneksi).
          "-".mysqli_error($koneksi));
      }

      while ($data = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>$data[npm]</td>";
          echo "<td>$data[namaMhs]</td>";
          echo '<td style="text-align: center;">' . $data['prodi'] . '</td>';
          echo "<td>$data[alamat]</td>";
          echo "<td>$data[noHP]</td>";
          echo '<td style="text-align: center; justify-content: center;">
          <a href="editMahasiswa.php?npm='.$data['npm'].'" class="btn btn-sm btn-primary"> Edit </a> 
          <a href="hapusmahasiswa.php?npm='.$data['npm'].'"
              onclick="return confirm(\'Anda Yakin Akan Menghapus Data?\')"class="btn btn-sm btn-danger"> Hapus</a> 

          </td>';
          echo '</tr>';
          }
              ?>
          </table>
        </div>
      </div>
      <div class="text-center p-3" style="background-color: rgb(84, 93, 130);; color: rgb(255, 255, 255)">
        Rachmad Yoga Saputra | Find Me On
        <a href="https://www.instagram.com/ygsptraa/"><img src="images/instagram.svg" height="25px" /></a>
        <a href="https://api.whatsapp.com/send/?phone=6282143084009&text&type=phone_number&app_absent=0"><img src="images/whatsapp.svg" height="25px" /></a>
      </div>
  </body>
</html>
