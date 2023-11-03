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
    $tanggal_kadaluarsa = $_POST["tanggal_kadaluarsa"];

    $query = "UPDATE toko_buah_aliong
              SET nama_buah = '$nama_buah', harga = '$harga', tanggal_kadaluarsa = '$tanggal_kadaluarsa'
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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
            color: #ff6633;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        label {
            display: block;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button[type="submit"] {
            background-color: #ff6633;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #ff3300;
        }
    </style>
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
            <li>
                <label for="tanggal_kadaluarsa">tanggal kadaluarsa   : </label>
                <input type="text" name="tanggal_kadaluarsa" id="tanggal_kadaluarsa" value="<?= $barang['tanggal_kadaluarsa'] ?>">
            </li>
        </ul>
        <button type="submit" name="submit">ubah data</button>
    </form>
</body>
</html>


