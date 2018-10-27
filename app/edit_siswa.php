<?php
include "koneksi.php";
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM siswa WHERE id=$id";
        $query = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($query);
        
        $nis = $data['Nis'];
        $nama = $data['nama'];
        $tgl_lahir = $data['tgl_lahir'];
        $alamat = $data['alamat'];

        
    } else {
        header('location: index.php?page=siswa');
    }

    if (isset($_POST['submit'])){ echo "abcndef";
        $id = $_GET['id'];
        $nis =isset($_POST['Nis']) ? $_POST['Nis'] : '';
        $nama =isset($_POST['nama']) ? $_POST['nama'] : '';
        $tgl_lahir =isset($_POST['tgl_lahir']) ? $_POST['tgl_lahir'] : null;
        $alamat =isset($_POST['alamat']) ? $_POST['alamat'] : '';
        
        $sql = "UPDATE siswa SET Nis = '$nis',nama = '$nama',tgl_lahir = '$tgl_lahir',alamat = '$alamat' WHERE id=$id";
        
        $query = mysqli_query($conn,$sql);
        if ($query) {
            echo "<script>alert('berhasil menyimpan data'); window.location='index.php?page=siswa'</script>";

        } else {
            echo "<script>alert('gagal menyimpan data'); window.location='index.php?page=edit_siswa&id=$id'</scipt>";
        }
        
    }
    
?>