<?php
include "koneksi.php";



// script search
$keyword ='';
if (isset($_POST['keyword'])){
    $keyword = $_POST['keyword'];
    if (!empty($keyword)){
        header ("location: index.php?page=siswa&keyword=$keyword");
    }else{
        header ("location: index.php?page=siswa");
    }
}
$perPage = 3; 

$cPage = isset($_GET['p']) ? $_GET['p']: 1;
$offset = ($cPage > 1) ? ($cPage * $perPage) - $perPage : 0;


if (isset($_GET['keyword'])){
    $keyword = $_GET['keyword'];
    $sqlJumlahData = "SELECT * FROM siswa WHERE nama LIKE '%$keyword%' OR Nis LIKE '%$keyword%'";
     $sql = "SELECT * FROM siswa WHERE nama LIKE '%$keyword%' OR Nis LIKE '%$keyword%' LIMIT $offset,$perPage";
}else{
    $sqlJumlahData = "SELECT * FROM siswa ";
    $sql = "SELECT * FROM siswa LIMIT $offset,$perPage";
}
$queryJumlahData = mysqli_query($conn,$sqlJumlahData);
$totalData = mysqli_num_rows($queryJumlahData);
$totalPage = ceil($totalData/$perPage);
// akhir script search


$query = mysqli_query ($conn,$sql);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM siswa WHERE id = $id";
    $query = mysqli_query($conn,$sql);
    if ($query) {
        echo "<script>alert('berhasil menghapus'); window.location='index.php?page=siswa'</script>";
    } else {
        echo "<script>alert('gagal menghapus); window.location='index.php?page=siswa'</scipt>";
    }
    
}
?>