<?php
    include 'koneksi.php';

    if(isset($_GET['id_siswa'])){
        header('Location:tampilan.php');
    }
    $id_siswa = $_GET['id_siswa'];
    $sql = "DELETE FROM data_siswa WHERE id_siswa='$id_siswa'";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: tampilan.php');
    }else{
        header('Location: hapus.php?status=gagal');
    
        
    if(isset($_GET['id_barang'])){
        header('Location:tampilanbarang.php');
    }
    $id_barang = $_GET['id_barang'];
    $sql = "DELETE FROM data_barang WHERE id_barang='$id_barang'";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: tampilanbarang.php');
    }else{
        header('Location: hapus.php?status=gagal');
    }
    }
?>