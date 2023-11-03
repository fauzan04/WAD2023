<?php
require 'functions.php';

if (isset($_GET['kode_buah'])) {
    $kode_buah = $_GET['kode_buah'];
    $query = "DELETE FROM toko_buah_aliong WHERE kode_buah = '$kode_buah'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: index.php');
        exit;
    } else {
        echo "Gagal menghapus data.";
    }
} else {
    echo "Kode barang tidak ditemukan.";
}
?>
