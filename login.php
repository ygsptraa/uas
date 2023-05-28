<?php
include "koneksi.php";
    if(isset($_POST['proseslog'])){
        $sql = mysqli_query($koneksi, "select * from user where username = '$_POST[username]' and password = '$_POST[password]'");

        $cek = mysqli_num_rows($sql);
        if( $cek > 0){
            $_SESSION['username'] = $_POST['username'];
            // $_SESSION['log'] = 'True';

            echo "<meta http-equiv=refresh content=0;URL='index.php'>";
        }
        else{
            echo "<script>
            alert(' Username dan Password Salah !');
            window.location = 'login.php';
            </script>";
        }
    }
    if(isset($_POST['registrasi'])){
        echo "<meta http-equiv=refresh content=0;URL='pendaftaran.php'>";
    }
    // Lakukan proses autentikasi di sini (verifikasi username dan password, dll.)
    // Jika autentikasi berhasil
    if(!isset($_SESSION['username'])){

    } else{
        header('location:index.php');
    }

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
                <div class="button-container">
                    <input type="submit" value="login" name="proseslog">
                    <input type="submit" value="registrasi" name="registrasi"  onclick="location.href='pendaftaran.php';">
                </div>
            </form>
        </div>


