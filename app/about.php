<?php

if (!isset($_SESSION['user'])){
    header('location: login.php');
}
    $pageTitle = "About";
    $nama = "Ala Rai";
    $tgl_lahir = "28 Juni 1998";
    $tempat_lahir = "Subang";
    $pekerjaan = "Mahasiswa";
    $hobby = "Tidur, Makan, Ngoding";
?>