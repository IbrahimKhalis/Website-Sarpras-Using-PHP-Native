<?php
    include 'koneksi.php';

    $id_siswa = $_GET['id_siswa'];
    $sql = "SELECT * FROM data_siswa WHERE id_siswa='$id_siswa'";
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
    <link rel="stylesheet" href="styleformeditsiswa.css">
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
                <ul>
                    <li><a href="siswa.html">Tambah Data</a></li>
                </ul>                                                               
        </div>
        <div class="databarang">
            <h2><a href="tampilanbarang.php">Data Barang</a></h2>
        </div>
        <footer>
            <img src="studentlogo.png" alt="" >
        </footer>
    </div>
    <form method="post" action="edit.php">
        <div class="edit-data-siswa">
            <h1>Edit Data Siswa</h1>
        </div>
        <table>
            <tr>
                <td width="150">Id Siswa</td>
                <td><input type="number" name="id_siswa" value="<?php echo $data['id_siswa']?>" required="required" ></td>
            </tr>
            <tr>
                <td>Nama Siswa</td>
                <td><input type="text" name="nama_siswa" value="<?php echo $data['nama_siswa']?>"  required="required" size="50" ></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jenis_kelamin" value="laki-laki" <?php if ($data['jenis_kelamin']=='laki-laki') echo 'checked'?> required="required"> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="perempuan" <?php if ($data['jenis_kelamin']=='perempuan') echo 'checked'?> required="required"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']?>" required="required"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" cols="50" rows="5" required="required"><?php echo $data['alamat']?></textarea></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" value="<?php echo $data['kelas']?>" required="required"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" value="<?php echo $data['jurusan']?>" required="required"></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="number" name="telepon" value="<?php echo $data['telepon']?>" required="required"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="simpansiswa" value="Simpan"></td>
            </tr>
        </table>
    </form>

</body>
</html>