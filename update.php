<?php 
include 'db_connect.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];

$update = mysqli_query($conn, "UPDATE users SET nama = '$nama', umur = '$umur' WHERE id = $id");

if($update){
    header('location:index.php');
}
 ?>