<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang</title>
    <style>
        * {
            margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
        }

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            width: fit-content;
            margin: 2rem auto;
            padding: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 1rem;
            width: 400px;
}

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type=text] {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button[type="submit"],
        button[type="reset"],
        button a {
            padding: 0.5rem 1rem;
            border: 1px solid #ddd;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 1rem;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
        }

        button[type="reset"] {
            background-color: #ccc;
            color: black;
        }

        button a {
            background-color: #f1f1f1;
            color: black;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            form {
                width: 80%;
            }
        }

    </style>
</head>
<body>
    <h1>Tambah Data Barang</h1>

    <form action="simpan.php" method="post">
        <div>
            <label for="nomor">No</label>
            <input type="text" name="nomor" id="nomor" required>
        </div>
        <div>
            <label for="nama_merek">Nama Merek</label>
            <input type="text" name="nama_merek" id="nama_merek" required>
        </div>
        <div>
            <label for="warna">Warna</label>
            <input type="text" name="warna" id="warna" required>
        </div>
        <div>
            <label for="jumlah">Jumlah</label>
            <input type="text" name="jumlah" id="jumlah" required>
        </div>
        <div>
            <button type="submit" name="submit">Simpan</button>
            <button type="reset">Ulangi</button>
            <button><a href="index.php">Kembali</a></button>
        </div>
    </form>
</body>
</html>
