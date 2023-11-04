<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data buah</title>
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
    <h1>tambah data buah</h1>
    <form action="tambah.php" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="kode_buah">Kode Buah:</label>
                <input type="text" name="kode_buah" id="kode_buah">
            </li>
            <li>
                <label for="nama_buah">Nama Buah:</label>
                <input type="text" name="nama_buah" id="nama_buah">
            </li>
            <li>
                <label for="harga">Harga Buah:</label>
                <input type="text" name="harga" id="harga">
            </li>
            <li>
                <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa:</label>
                <input type="text" name="tanggal_kadaluarsa" id="tanggal_kadaluarsa">
            </li>
        </ul>
        <button type="submit" name="submit">Tambah Data</button>
    </form>
</body>
</html>
