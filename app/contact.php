<?php
include "koneksi.php";

$sql = "SELECT * FROM contact";
$query = mysqli_query($conn,$sql);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM contact WHERE id = $id";
    $query = mysqli_query($conn,$sql);
    if ($query) {
        echo "<script>alert('berhasil menghapus'); window.location='index.php?page=contact'</script>";
    } else {
        echo "<script>alert('gagal menghapus); window.location='index.php?page=contact'</scipt>";
    }
    
}
?>