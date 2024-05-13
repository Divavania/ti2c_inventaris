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
    body {
        font-family: 'Comic Sans MS', cursive, sans-serif;
        background-color: #f3f6f9;
        padding: 20px;
    }

    h1 {
        color: #473e3b;
        font-size: 36px;
        margin-bottom: 30px;
        text-align: center;
    }

    form {
        display: flex;
        flex-direction: column;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        margin: 0 auto;
    }

    form div {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-size: 18px;
        margin-bottom: 5px;
    }

    input[type="text"] {
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    button {
        padding: 10px 20px;
        background-color: #473e3b;
        color: #ffffff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 10px;
    }

    button:hover {
        background-color: #ffc640;
        color: #473e3b;
    }

    a {
        background-color: #ffc640;
        color: #473e3b;
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
