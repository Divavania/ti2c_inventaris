<!DOCTYPE html>
<html>
<head>
	<title>Data barang</title>
	<style>
        body {
            font-family: sans-serif;
            margin: 2rem;
        }

        h2 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 500px;
            margin: 0 auto;
            margin-bottom: 1rem;
        }

        th, td {
            padding: 0.5rem 1rem;
            border: 1px solid #ccc;
        }

        th {
            text-align: left;
            font-weight: bold;
        }

        input[type="text"],
        input[type="submit"] {
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
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