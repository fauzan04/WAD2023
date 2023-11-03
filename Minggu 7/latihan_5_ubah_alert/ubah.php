<?php
$conn = mysqli_connect("localhost", "root", "", "latihanwad");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET["kode_buah"])) {
    $kode_buah = $_GET["kode_buah"];
    $query = "SELECT * FROM toko_buah_aliong WHERE kode_buah = '$kode_buah'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $barang = mysqli_fetch_assoc($result);
    } else {
        die("Barang tidak ditemukan.");
    }
}

if (isset($_POST["submit"])) {
    $kode_buah = $_POST["kode_buah"];
    $nama_buah = $_POST["nama_buah"];
    $harga = $_POST["harga"];

    $query = "UPDATE toko_buah_aliong
              SET nama_buah = '$nama_buah', harga = '$harga'
              WHERE kode_buah = '$kode_buah'";

    if (mysqli_query($conn, $query)) {
        echo '<script>alert("Data berhasil diubah!");</script>';
        echo '<script>window.location.href = "index.php";</script>';
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah data buah</title>
</head>
<body>
    <h1>ubah data buah</h1>
    <form action="ubah.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="kode_buah" value="<?= $barang['kode_buah'] ?>">
        <ul>
            <li>
                <label for="nama_buah">nama buah    : </label>
                <input type="text" name="nama_buah" id="nama_buah" value="<?= $barang['nama_buah'] ?>">
            </li>
            <li>
                <label for="harga">harga buah   : </label>
                <input type="text" name="harga" id="harga" value="<?= $barang['harga'] ?>">
            </li>
        </ul>
        <button type="submit" name="submit">ubah data</button>
    </form>
</body>
</html>