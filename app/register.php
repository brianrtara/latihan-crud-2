<?php
session_start();
include "koneksi.php";
$nama = (isset($_POST['nama'])) ? $_POST['nama'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$username= (isset($_POST['username'])) ? $_POST['username'] : '';
$password = (isset($_POST['password'])) ? md5($_POST['password']) : '';

if (isset($_POST['submit'])){
    $sql = "INSERT INTO users(nama,email,username,password,tipeuser)
            VALUE ('$nama','$email','$username','$password','siswa')";
    $query = mysqli_query($conn,$sql);

    if ($query) {
        echo "<script>alert('berhasil mendaftar');windows.location='login.php'</script>";
    }else{
        echo "<script>alert('Gagal mendaftar')</script>";
        
    }
}
if (isset($_SESSION['user'])){
    header ('location: index.php');
}
?>