<?php
require 'functions.php';

if (isset($_GET['kode_buah'])) {
    $kode_buah = $_GET['kode_buah'];
    $query = "DELETE FROM toko_buah_aliong WHERE kode_buah = '$kode_buah'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data berhasil dihapus'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data'); window.location='index.php';</script>";
    }
} else {
    echo "Kode barang tidak ditemukan.";
}
?>
