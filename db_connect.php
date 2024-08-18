<?php
// membuat variabel servername, username, password, dan dbname
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_crud";

// membuat koneksi sederhana menggunakan msqli
$conn = mysqli_connect($servername, $username, $password, $dbname);

// mengecek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// menutup koneksi
mysqli_close($conn);


?>