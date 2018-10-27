<?php
    include "koneksi.php";

    if (isset($_POST['submit'])){
        $nis =isset($_POST['Nis']) ? $_POST['Nis'] : '';
        $nama =isset($_POST['nama']) ? $_POST['nama'] : '';
        $tgl_lahir =isset($_POST['tgl_lahir']) ? $_POST['tgl_lahir'] : null;
        $alamat =isset($_POST['alamat']) ? $_POST['alamat'] : '';
        $id_user = isset($_SESSION['user']) ? $_SESSION['user']['id']: 0;
        
        $sql = "INSERT INTO siswa(Nis,nama,tgl_lahir,alamat,id_user) VALUE('$nis','$nama','$tgl_lahir','$alamat','$id_user')";
        
        $query = mysqli_query($conn,$sql);
        if ($query) {
            echo "<script>alert('berhasil menyimpan data'); window.location='index.php?page=siswa'</script>";

        } else {
            echo "<script>alert('gagal menyimpan data'); window.location='index.php?page=add_siswa'</scipt>";
        }
        
    }
?>