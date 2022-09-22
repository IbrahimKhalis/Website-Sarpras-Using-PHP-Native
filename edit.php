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

        $sql = "UPDATE `data_siswa` SET `nama_siswa`='$nama_siswa',`jenis_kelamin`='$jenis_kelamin',`tanggal_lahir`='$tanggal_lahir',`alamat`='$alamat',`kelas`='$kelas',`jurusan`='$jurusan',`telepon`='$telepon' WHERE id_siswa='$id_siswa'";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: tampilan.php');
        }else{
            header('Location: edit.php?edit=gagal');
        }
    }


    if(isset($_POST['simpanbarang'])){
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $jenis_barang = $_POST['jenis_barang'];
        $merk = $_POST['merk'];
        $stock = $_POST['stock'];
        $kondisi_barang = $_POST['kondisi_barang'];

        $sql = "UPDATE `data_barang` SET `nama_barang`='$nama_barang',`jenis_barang`='$jenis_barang',`merk`='$merk',`stock`='$stock',`kondisi_barang`='$kondisi_barang' WHERE id_barang='$id_barang'";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: tampilanbarang.php');
        }else{
            header('Location: edit.php?edit=gagal');
        }
    }
?>