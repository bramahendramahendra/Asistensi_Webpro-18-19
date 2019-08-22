<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "UPDATE `nilai` SET `uts`=$_POST[uts],`uas`=$_POST[uas],`kuis`=$_POST[kuis],`tubes`=$_POST[tubes] WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:rekapNilai.php");
?>