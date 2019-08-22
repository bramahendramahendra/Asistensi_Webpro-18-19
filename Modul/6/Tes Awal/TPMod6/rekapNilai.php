<!DOCTYPE html>
<html lang="en">
<?php


require_once("config.php");
session_start();
if ($_SESSION['loggedIn']){
    $getNim = $conn->query('SELECT nim FROM akun')->fetch_assoc();
    $result = mysqli_query($conn, "SELECT * FROM nilai");
    $nim = $getNim['nim'];
    

    function indexNilai($total){
        if ($total<=100 && $total>80){
            $index = 'A';
        }else if ($total<=80 && $total>70){
            $index = 'AB';
        }else if ($total<=70 && $total>60){
            $index = 'B';
        }else if ($total<=60 && $total>50){
            $index = 'C';
        }else if ($total<=50 && $total>40){
            $index = 'D';
        }else{
            $index = 'E';
        }

        return $index;
    }
    function keterangan($index){
        if ($index == 'A'){
            $ket = 'Kece';
        }else if ($index == 'AB'){
            $ket = 'Mantap';
        }else if ($index == 'B'){
            $ket = 'Ya';
        }else if ($index == 'C'){
            $ket = 'Hm';
        }else if ($index == 'D'){
            $ket = 'Aduh';
        }else{
            $ket = 'Bodo';
        }

        return $ket;
    }
}else{
    header('location:login.php');
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rekap Nilai - <?= $nim?>]</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
    <div class="content">
        <div class="show">
            <h1>rekap nilai <?= $nim?></h1>
            <table>
                <tr>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Kuis</th>
                    <th>Tubes</th>
                    <th>Index</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
                <?php  while($getNilai = mysqli_fetch_array($result)) {?> 
                <tr>
                    <td><?= $getNilai['uts']?></td>
                    <td><?= $getNilai['uas']?></td>
                    <td><?= $getNilai['kuis']?></td>
                    <td><?= $getNilai['tubes']?></td>
                    <?php $total = ($getNilai['uts']*0.25) + ($getNilai['uas']*0.25) + ($getNilai['tubes']*0.35) + ($getNilai['kuis']*0.15);?>
                    <td><?= indexNilai($total)?></td>
                    <td><?= keterangan(indexNilai($total))?></td>
                    <td>
                        <?php echo " <a href='edit.php?id=$getNilai[id]'>edit</a>" ?>
                        <?php echo " <a href='hapus.php?id=$getNilai[id]'>Hapus</a>" ?>
                    </td>
                </tr>
                <?php }?>
            </table>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>
</html>