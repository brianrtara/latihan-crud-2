<?php
    include "koneksi.php";

    if (isset($_POST['submit'])){
        $nama =isset($_POST['nama']) ? $_POST['nama'] : '';
        $email =isset($_POST['email']) ? $_POST['email'] : '';
        $company =isset($_POST['company']) ? $_POST['company'] : '';
        $phone =isset($_POST['phone']) ? $_POST['phone'] : null;
        $description =isset($_POST['description']) ? $_POST['description'] : '';
        
        $sql = "INSERT INTO contact(nama,email,company,phone,description) VALUE('$nama','$email','$company','$phone','$description')";
        
        $query = mysqli_query($conn,$sql);
        if ($query) {
            echo "<script>alert('berhasil menyimpan data'); window.location='index.php?page=contact'</script>";

        } else {
            echo "<script>alert('gagal menyimpan data'); window.location='index.php?page=add_contact'</scipt>";
        }
        
    }
?>