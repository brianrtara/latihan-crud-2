<?php
    session_start();
    include "koneksi.php";

    $username = isset($_POST['username']) ? $_POST['username']: '';
    $password= isset($_POST['password']) ? $_POST['password']: '';
    
    if (isset($_POST['submit'])) {
        $sql = "SELECT * FROM users WHERE username ='$username' AND password ='$password'";
        $query = mysqli_query($conn,$sql);
        $checkLogin = mysqli_num_rows($query);
        if ($checkLogin==1){
            $row = mysqli_fetch_assoc($query);
            $_SESSION['user']= $row;
            echo "<script>alert('login berhasil');window.location='index.php'</script>";
        } else{
            echo "<script>alert('username dan password salah')</script>";
        }
    }

    if (isset($_SESSION['user'])){
        header ('location: index.php');
    }
    
?>