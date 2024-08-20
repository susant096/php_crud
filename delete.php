<?php 
include 'db_connect.php';
$id = $_GET['id'];
$delete = mysqli_query($conn, "DELETE FROM users WHERE id = $id");

if($delete){
    header('location:index.php');
}
 ?>