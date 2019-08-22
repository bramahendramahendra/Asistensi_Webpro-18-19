<!DOCTYPE html>
<html lang="en">
<?php 

require_once("config.php");
session_start();
if ($_SESSION['loggedIn']){
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM nilai WHERE id = $id");
    $getNim = $conn->query('SELECT nim FROM akun')->fetch_assoc();
    $nim = $getNim['nim'];
}else{
    header('location:login.php');
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Nilai-<?= $nim?></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
    <div class="content">
        <div class="input">
            <h1>input nilai - <?= $nim?></h1>
            <?php  while($getNilai = mysqli_fetch_array($result)) {?> 
            <form action="update.php?id=<?= $getNilai['id']?>" method="POST">
                <input type="text" placeholder="NIM" name="nim" value=<?= $nim?> readonly>
                <input type="text" placeholder="UTS" name="uts" value=<?= $getNilai['uts']?>>
                <input type="text" placeholder="UAS" name="uas" value=<?= $getNilai['uas']?>>
                <input type="text" placeholder="Kuis" name="kuis" value=<?= $getNilai['kuis']?>>
                <input type="text" placeholder="Tubes" name="tubes" value=<?= $getNilai['tubes']?>>
                <button type="submit" name='submit'>Edit</button>
            </form>
            <?php }?>
        </div>
    </div>
</body>
</html>