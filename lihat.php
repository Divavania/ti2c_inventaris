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
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1, h4 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
  			width: auto;
  			max-width: 100%;
  			margin: 0 auto;
		}

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            text-align: left;
            background-color: #f2f2f2;
        }
		

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            color: #0056b3;
        }

        .aksi a {
            display: inline-block;
            padding: 5px 10px;
            margin-right: 5px;
            border: 1px solid #007bff;
            color: #007bff;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .aksi a:hover {
            background-color: #007bff;
            color: #fff;
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