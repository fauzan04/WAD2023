<?php
require 'functions.php';
$brg = query("SELECT * FROM toko_buah_aliong");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN ADMIN</title>
</head>
<body>
    <h1>DAFTAR BUAH TOKO ALIONG</h1>
    <a href="tambah.php">tambah data buah</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Kode Buah</th>
            <th>Nama Buah</th>
            <th>Harga Buah</th>
        </tr>
        <?php foreach ($brg as $index => $barang) : ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td>
                    <a href="ubah.php?kode_buah=<?= $barang['kode_buah'] ?>">Ubah</a>
                    <a href="">Hapus</a>
                </td>
                <td><?= $barang['kode_buah'] ?></td>
                <td><?= $barang['nama_buah'] ?></td>
                <td><?= $barang['harga'] ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>