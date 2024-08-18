<?php
require_once('db_connect.php');

// menangkap data yang di kirim dari form
if(isset($_POST['submit'])){

    // $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    // $umur = mysqli_real_escape_string($conn, $_POST['umur']);

    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
//     // menginput data ke database
    mysqli_query($conn, "INSERT INTO users(`nama`, `umur`)  VALUES('$nama', '$umur')");
}

// mengalihkan halaman kembali ke index.php
// header("location:index.php");

?>