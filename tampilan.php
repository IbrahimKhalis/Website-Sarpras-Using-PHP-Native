<?php 
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <h1>
            <img src="logoinven.png" alt=""><span>INVEN</span>TORY
        </h1>
        <div class="datasiswa">
            <h2> <a href="tampilan.php">Data Siswa</a></h2>
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
    <div class="data-data-siswa">
        <h1>Data - Data Siswa</h1>
    </div>
    <div class="content">
    <form action="search.php" method="get">
        <button type="submit"><i name="search" class="fa fa-search"></i></button>
        <input type="text" name="keyword" placeholder="Search.." autocomplete="off">
    </form>
        <table border="0" cellspacing="0">
            <tr class="judul">
                <th>Id Siswa</th>
                <th>Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Telepon</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
            <?php 
            $sql = "SELECT * FROM data_siswa";
            $query = mysqli_query($connect, $sql);
            while ($data = mysqli_fetch_array($query)){
                echo "
                    <tr class='data'>
                        <td>$data[id_siswa]</td>
                        <td>$data[nama_siswa]</td>
                        <td>$data[jenis_kelamin]</td>
                        <td>$data[tanggal_lahir]</td>
                        <td>$data[alamat]</td>
                        <td>$data[kelas]</td>
                        <td>$data[jurusan]</td>
                        <td>$data[telepon]</td>
                        <td>
                            <a href='formeditsiswa.php?id_siswa=".$data['id_siswa']."'>Edit</a>
                        </td>
                        <td>
                            <a href='hapus.php?id_siswa=".$data['id_siswa']."'>Hapus</a>
                        </td>
                    </tr>
                    ";
            }
            ?>
        </table>
    </div>
</body>
</html>