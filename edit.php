<!DOCTYPE html>
<html>
<head>
	<title>Data barang</title>
	<style>
    /* Basic styles */
    body {
      font-family: sans-serif;
      margin: 2rem; /* Add some margin around the body */
    }

    h2 {
      text-align: center;
    }

    /* Form styling */
    table {
      border-collapse: collapse; /* Remove gaps between table cells */
      width: 500px; /* Adjust the width as needed */; /* Adjust table width as needed */
      margin: 0 auto;
      margin-bottom: 1rem; /* Add space below the table */
    }

    th, td {
      padding: 0.5rem 1rem; /* Add padding to table cells */
      border: 1px solid #ccc; /* Add borders */
    }

    th {
      text-align: left; /* Align table headers to the left */
      font-weight: bold; /* Make table headers bold */
    }

    input[type="text"],
    input[type="submit"] {
      padding: 0.5rem; /* Add padding to input fields and submit button */
      border: 1px solid #ccc; /* Add borders */
      border-radius: 3px; /* Add rounded corners */
    }

    input[type="submit"] {
      cursor: pointer; /* Make the submit button look clickable */
      background-color: #4CAF50; /* Green background */
      color: white; /* White text */
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
    
    </form>
</body>
</html>