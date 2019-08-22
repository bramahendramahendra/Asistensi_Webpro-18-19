<?php
require_once("auth.php"); 
$nama = $_SESSION["user"]["name"]; 
$hasil = mysqli_query($mysqli, "SELECT * FROM postingan WHERE name = '$nama'  ORDER BY id_posting DESC");
?>