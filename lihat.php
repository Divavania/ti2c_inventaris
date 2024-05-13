<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data barang</title>
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

    table {
        border-collapse: collapse;
        width: 100%;
        max-width: 500px;
        margin: 0 auto;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #473e3b;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    h4 {
        color: #473e3b;
        font-size: 24px;
        margin-top: 30px;
        text-align: center;
    }

    a {
        color: #473e3b;
        text-decoration: none;
        margin-right: 10px;
    }

    a:hover {
        color: #ffc640;
    }
    </style>
</head>
<body>
	<h1>Data Printer</h1>
<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Merek</th>
			<th>Warna</th>
			<th>Jumlah</th>
            <th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$data = mysqli_query($koneksi,"SELECT * FROM printer");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['nomor']; ?></td>
				<td><?php echo $d['nama_merek']; ?></td>
				<td><?php echo $d['warna']; ?></td>
				<td><?php echo $d['jumlah']; ?></td>
                <td>
                    <a href="edit.php?nomor=<?php echo $d['nomor']; ?>">Edit</a>
					<a href="hapus.php?nomor=<?php echo $d['nomor']; ?>">Hapus</a>
                </td>
			</tr>
			<?php 
		}
		?>
	</table>
    <h4><a href="tambah.php">+ Tambah Data</a></h4>
</body>
</html>