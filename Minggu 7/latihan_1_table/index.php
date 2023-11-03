<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN ADMIN</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            border: 1px solid #ddd;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h1>DAFTAR BUAH TOKO ALIONG</h1>
    <table>
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Kode Buah</th>
            <th>Nama Buah</th>
            <th>Harga Buah</th>
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
        </tr>
    </table>
</body>
</html>
