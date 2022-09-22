<?php
    include 'koneksi.php';

    $id_barang = $_GET['id_barang'];
    $sql = "SELECT * FROM data_barang WHERE id_barang='$id_barang'";
    $query = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) <1   ){
        die("Data Tidak Ditemukan");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleformeditbarang.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="sidebar">
        <h1>
            <img src="logoinven.png" alt=""><span>INVEN</span>TORY
        </h1>
        <div class="datasiswa">
            <h2><a href="tampilan.php">Data Siswa</a></h2>                                                           
        </div>
        <div class="databarang">
            <h2><a href="tampilanbarang.php">Data Barang</a></h2>
                <ul>
                    <li><a href="barang.html">Tambah Data</a></li>
                </ul>  
        </div>
        
        <footer>
            <img src="baranglogo.png" alt="" >
        </footer>
    </div>
    <form method="post" action="edit.php">
        <div class="edit-data-barang">
            <h3>Edit Data Barang</h3>
        </div>
        <table>
            <tr>
                <td width="150">Id Barang</td>
                <td><input type="number" name="id_barang" value="<?php echo $data['id_barang']?>" required="required"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td> <input type="text" name="nama_barang" value="<?php echo $data['nama_barang']?>" required="required" size="30"></td>
            </tr>
            <tr>
                <td>Jenis Barang</td>
                <td><input type="text" name="jenis_barang" value="<?php echo $data['jenis_barang']?>" required="required"></td>
            </tr>
            <tr>
                <td>Merk</td>
                <td><input type="text" name="merk" value="<?php echo $data['merk']?>"  required="required"></td>
            </tr>
            <tr>
                <td>Stock</td>
                <td><input type="number" name="stock" value="<?php echo $data['stock']?>" required="required"></td>
            </tr>
            <tr>
                <td>Kondisi Barang</td>
                <td><input  type="text" name="kondisi_barang" value="<?php echo $data['kondisi_barang']?>" required="required"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="simpanbarang" value="Simpan"></td>
            </tr>
        </table>
</body>
</html>