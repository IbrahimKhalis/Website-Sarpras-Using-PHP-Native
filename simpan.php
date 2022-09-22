<?php
    include 'koneksi.php';

    if(isset($_POST['simpansiswa'])){
        $id_siswa = $_POST['id_siswa'];
        $nama_siswa = $_POST['nama_siswa'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $alamat = $_POST['alamat'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];   
        $telepon = $_POST['telepon'];
        

        $sql = "INSERT INTO data_siswa (id_siswa, nama_siswa, jenis_kelamin, tanggal_lahir, alamat, kelas, jurusan, telepon) VALUES ('$id_siswa', '$nama_siswa','$jenis_kelamin','$tanggal_lahir','$alamat','$kelas','$jurusan', '$telepon')";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: tampilan.php');
        }else{
            header('Location: simpan.php?status=gagal');
        }
    }

    if(isset($_POST['simpanbarang'])){
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $jenis_barang = $_POST['jenis_barang'];
        $merk = $_POST['merk'];
        $stock = $_POST['stock'];
        $kondisi_barang = $_POST['kondisi_barang']; 

        $sql = "INSERT INTO `data_barang`(`id_barang`, `nama_barang`, `jenis_barang`, `merk`, `stock`, `kondisi_barang`) VALUES ('$id_barang','$nama_barang','$jenis_barang','$merk','$stock','$kondisi_barang')";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: tampilanbarang.php');
        }else{
            header('Location: simpan.php?status=gagal');
        }
    }
?>