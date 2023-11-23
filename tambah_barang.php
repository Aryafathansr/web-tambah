<?php  

require 'function.php';
if(isset($_POST['tambah'])){
    if(tambah_barang($_POST) > 0){
        echo "<script>
        alert('data berhasil ditambahkan');
        documents.location.href = 'index.php';</script>";
    }else{
            echo "<script>
            alert('data gagal ditambahkan');
            documents.location.href = 'index.php';
            </script>";
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Tambah Data Barang</h1>
    <form action="" method="post">
      <div>
        <label for="nama">nama barang</label>
        <input type="text" name="nama_barang" id="nama_barang"required>
      </div>


      <div>
      <label for="harga">harga barang</label>
        <input type="number" name="harga" id="harga"required>
      </div>


      <div>
      <label for="stok">stok</label>
        <input type="number" name="stok" id="stok"required>
      </div>

      <div>
      <label for="id_supplier">id supplier</label>
        <input type="number" name="id_supplier" id="id_supplier"required>
      </div>
      <button type="submit" name="tambah">tambah data</button>
    </form>
    <a href="index.php"><button>back</button></a>
    
</body>
</html>