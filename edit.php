<!DOCTYPE html>
<html>
<head>
	<title>Data barang</title>
	<style>
    body {
        font-family: 'Comic Sans MS', cursive, sans-serif;
        background-color: #f3f6f9;
        padding: 20px;
    }

    h2 {
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

    input[type="submit"] {
        padding: 10px 20px;
        background-color: #473e3b;
        color: #ffffff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 10px;
    }

    input[type="submit"]:hover {
        background-color: #ffc640;
        color: #473e3b;
    }
    </style>
</head>
<body>
 
	<h2>Edit Data Barang</h2>

	<?php
    include 'koneksi.php';
    $nomor = $_GET ['nomor'];
    $query = mysqli_query($koneksi, "select * from printer where nomor='$nomor'");
    $data = mysqli_fetch_array($query);
    ?>
    <form action="update.php" method="POST">
        <table>
            <tr>
                <td>No</td>
                <td><input type="text" name="nomor" value="<?php echo $data['nomor'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Merek</td>
                <td><input type="text" name="nama_merek" value="<?php echo $data['nama_merek'] ?>"></td>
            </tr>
            <tr>
                <td>Warna</td>
                <td><input type="text" name="warna" value="<?php echo $data['warna'] ?>"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah" value="<?php echo $data['jumlah'] ?>"></td>
            </tr>
            <tr>
                <td></td>
				<td><input type="submit" value="simpan"></td>
		    </tr>
        </table>
    </form>
</body>
</html>