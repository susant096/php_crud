<?php
// membuat variabel servername, username, password, dan dbname
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_crud";

// membuat koneksi sederhana menggunakan msqli
$conn = mysqli_connect($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
