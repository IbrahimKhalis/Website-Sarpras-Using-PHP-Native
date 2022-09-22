<?php 
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylebarang.css">
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
    <div class="data-data-barang">
        <h1>Data - Data Barang</h1>
    </div>
    <div class="content">
    <form action="searchbarang.php" method="get">
        <button type="submit"><i name="searchbarang" class="fa fa-search"></i></button>
        <input type="text" name="keywordbarang" placeholder="Search.." autocomplete="off">
    </form>
        <table border="0" cellspacing="0">
            <tr class="judul">
                <th>Id Barang</th>
                <th>Nama Barang</th>
                <th>Jenis Barang</th>
                <th>Merk</th>
                <th>Stock</th>
                <th>Kondisi Barang</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
            <?php 
            if(isset($_GET['keywordbarang'])){
                $searchbarang = $_GET['keywordbarang'];
                $sql = "SELECT * FROM `data_barang` WHERE id_barang like'%$searchbarang%' or nama_barang like'%$searchbarang%' or jenis_barang like'%$searchbarang%' or merk like'%$searchbarang%' or stock like'%$searchbarang%' or kondisi_barang like'%$searchbarang%'";
            
            $query = mysqli_query($connect, $sql);
            while ($data = mysqli_fetch_array($query)){
                echo "
                    <tr class='data'>
                        <td>$data[id_barang]</td>
                        <td>$data[nama_barang]</td>
                        <td>$data[jenis_barang]</td>
                        <td>$data[merk]</td>
                        <td>$data[stock]</td>
                        <td>$data[kondisi_barang]</td>
                        <td>
                            <a href='formeditbarang.php?id_barang=".$data['id_barang']."'>Edit</a>
                        </td>
                        <td>
                            <a href='hapus.php?id_barang=".$data['id_barang']."'>Hapus</a>
                        </td>
                    </tr>
                    ";
            }
        }
            ?>
        </table>
    </div>
</body>
</html>