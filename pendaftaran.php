<?php
include "koneksi.php";
?>
    <head>
        <meta charset="UTF-8">
        <title>Uas</title>
        <link rel="stylesheet" href="style.css">
    </head>
        <div class="box">
            <span class="borderLine"></span>
            <form action="" method="POST">
                <h2>Sign in</h2>
                <div class="inputBox">
                    <input type="text" required="required" name="username">
                     <span>Username</span>
                     <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" required="required" name="password">
                     <span>password</span>
                     <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" required="required" name="nama">
                     <span>Nama</span>
                     <i></i>
                </div>
                <input type="submit" value="Daftar" name="daftar" >
            </form>
        </div>
<?php
    if(isset($_POST['daftar'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        
        $cek_user = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
        $cek_login = mysqli_num_rows($cek_user);
        
        if ($cek_login > 0){
            echo "<script>
            alert('Username telah terdaftar');
            window.location = 'pendaftaran.php'; 
            </script>";
        } else {
            mysqli_query($koneksi, "INSERT INTO user VALUES('$username','$password','$nama')");
            echo "<script>
            alert('Registrasi telah berhasil');
            window.location = 'index.php'; 
            </script>";
    }
}
?>
