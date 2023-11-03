<?php
$conn = mysqli_connect("localhost", "root", "", "latihanwad");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit"])) {
    $kode_buah = $_POST["kode_buah"];
    $nama_buah = $_POST["nama_buah"];
    $harga = $_POST["harga"];

    $query = "INSERT INTO toko_buah_aliong (kode_buah, nama_buah, harga)
              VALUES ('$kode_buah', '$nama_buah', '$harga')";

    if (mysqli_query($conn, $query)) {
        echo '<script>alert("data berhasil ditambahkan!");</script>';
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
    <title>tambah data buah</title>
</head>
<body>
    <h1>tambah data buah</h1>
    <form action="tambah.php" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="kode_buah">kode buah    : </label>
                <input type="text" name="kode_buah" id="kode_buah">
            </li>
            <li>
                <label for="nama_buah">nama buah    : </label>
                <input type="text" name="nama_buah" id="nama_buah">
            </li>
            <li>
                <label for="harga">harga buah  : </label>
                <input type="text" name="harga" id="harga">
            </li>
        </ul>
        <button type="submit" name="submit">tambah data</button>
    </form>
</body>
</html>
