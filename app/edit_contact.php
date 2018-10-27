<?php
include "koneksi.php";
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM contact WHERE id=$id";
        $query = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($query);
        
        $nama = $data['nama'];
        $email = $data['email'];
        $company = $data['company'];
        $phone = $data['phone'];
        $description = $data['description'];

        
    } else {
        header('location: index.php?page=contact');
    }

    if (isset($_POST['submit'])){
        $id = $_GET['id'];
        $nama =isset($_POST['nama']) ? $_POST['nama'] : '';
        $email =isset($_POST['email']) ? $_POST['email'] : '';
        $company =isset($_POST['company']) ? $_POST['company'] :'';
        $phone =isset($_POST['phone']) ? $_POST['phone'] : null;
        $description =isset($_POST['description']) ? $_POST['description'] : '';
        
        $sql = "UPDATE contact SET nama = '$nama',email = '$email',company = '$company',description = '$description' WHERE id=$id";
        
        $query = mysqli_query($conn,$sql);
        if ($query) {
            echo "<script>alert('berhasil menyimpan data'); window.location='index.php?page=contact'</script>";

        } else {
            echo "<script>alert('gagal menyimpan data'); window.location='index.php?page=edit_contact&id=$id'</scipt>";
        }
        
    }
    
?>