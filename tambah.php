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
        /* Reset default browser styles (optional) */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: sans-serif; /* Choose a preferred font family */
}

/* Center the h1 element */
h1 {
      text-align: center;
    }

/* Form container */
form {
  display: flex;
  flex-direction: column;
  width: fit-content;
  margin: 2rem auto; /* Center the form horizontally */
  padding: 1rem;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-top: 1rem; /* Add space between heading and form */
  width: 400px; /* Adjust the width as needed */
}


/* Form labels */
label {
  display: block; /* Display labels on their own lines */
  margin-bottom: 5px;
  font-weight: bold;
}

/* Input fields */
input[type=text] {
    width: 100%; /* Adjust the width as needed */  
    padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 3px;
}

/* Submit and reset buttons */
/* Submit and reset buttons */
button[type="submit"],
    button[type="reset"],
    button a { /* Style the anchor (<a>) element within the "Kembali" button */
      padding: 0.5rem 1rem;
      border: 1px solid #ddd; /* Add a thin border */
      border-radius: 3px;
      cursor: pointer;
      margin-top: 1rem;
    }

    button[type="submit"] {
      background-color: #4CAF50; /* Green */
      color: white;
    }

    button[type="reset"] {
      background-color: #ccc;
      color: black;
    }

    /* Style the anchor (<a>) element within the "Kembali" button */
    button a {
      background-color: #f1f1f1; /* Light gray background */
      color: black;
      text-decoration: none; /* Remove underline from link */
    }

/* Responsive design (optional) */
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
