<?php 
$conn = mysqli_connect("localhost", "root", "", "admin");
    $id =  $_GET['id'];

    $data = mysqli_query($conn, "DELETE FROM contact WHERE id = $id");

    if($data){
        echo "<script>
        alert('Data Berhasil Di hapus');
        window.location.href='pesan.php';
        </script>";
    }
?>