<?php
    include "koneksi.php";

    if (isset($_POST['submit'])){
        $nis =isset($_POST['Nis']) ? $_POST['Nis'] : '';
        $nama =isset($_POST['nama']) ? $_POST['nama'] : '';
        $tgl_lahir =isset($_POST['tgl_lahir']) ? $_POST['tgl_lahir'] : null;
        $alamat =isset($_POST['alamat']) ? $_POST['alamat'] : '';
        
        $sql = "INSERT INTO siswa(Nis,nama,tgl_lahir,alamat) VALUE('$nis','$nama','$tgl_lahir','$alamat')";
        
        $query = mysqli_query($conn,$sql);
        if ($query) {
            echo "<script>alert('berhasil menyimpan data'); window.location='index.php?page=siswa'</script>";

        } else {
            echo "<script>alert('gagal menyimpan data'); window.location='index.php?page=add_siswa'</scipt>";
        }
        
    }
?>