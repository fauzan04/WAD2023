<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN ADMIN</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
            color: #ff6633;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            border: 1px solid #ddd;
            background-color: #fff;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #ffcc66;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            margin-right: 10px;
            padding: 5px 10px;
            background-color: #ff6633;
            color: #fff;
            border: 1px solid #ff6633;
            border-radius: 4px;
        }

        a:hover {
            background-color: #ff3300;
            border: 1px solid #ff3300;
        }
    </style>
</head>
<body>
    <h1>DAFTAR BUAH TOKO ALIONG</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Kode Buah</th>
            <th>Nama Buah</th>
            <th>Harga Buah</th>
            <th>Kadaluarsa</th>
        </tr>
        <tr>
            <td>1</td>
            <td>
                <a href="#">Ubah</a>
                <a href="#">Hapus</a>
            </td>
            <td>A001</td>
            <td>Apel</td>
            <td>5,000</td>
            <td>31/12/2024</td>
        </tr>
    </table>
</body>
</html>
