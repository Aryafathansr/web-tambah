<?php
require 'function.php';
$barang = query ("select * from barang");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Barang</h1>
    <table border="1" cellpadding="5">
        <tr>
            <th>No.</th>
            <th>id_barang</th>
            <th>nama_barang</th>
            <th>harga</th>
            <th>stok</th>
            <th>id suplier</th>
            <th>action</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach($barang as $brg){
            ?>
        <tr>
            <td><?= $i;?></td>
            <td><?= $brg['id_barang'];?></td>
            <td><?= $brg['nama_barang'];?></td>
            <td><?= $brg['harga'];?></td>
            <td><?= $brg['stok'];?></td>
            <td><?= $brg['id_supplie'];?></td>
            <td><a href=""><button>ubah</button></a><a href=""><button>hapus</button></a></td>
        </tr>
        <?php $i++;?>
        <?php }?>
    </table>
    <a href="tambah_barang.php"><button>tambah data</button></a>
</body>
</html>