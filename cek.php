<?php
// Periksa apakah pengguna telah melakukan login
if(isset($_SESSION['username'])){

} else{
    header('location:login.php');
}
$username = $_SESSION['username'];