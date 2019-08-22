<?php 
    require_once("config.php");
    if(isset($_POST['submit'])){
        $get = $conn->query('INSERT INTO `nilai`(`uts`, `uas`, `kuis`, `tubes`) VALUES ('.$_POST["uts"].','.$_POST["uas"].','.$_POST["kuis"].','.$_POST["tubes"].')');
        if($get){
            header('location:rekapNilai.php');
        }else{
            header('location:inputNilai.php');
        }
    }
?>