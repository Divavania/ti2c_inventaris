<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaris</title>
    <style>
    body {
        font-family: 'Comic Sans MS', cursive, sans-serif;
        background-color: #f3f6f9;
        padding: 20px;
    }

    header {
        background-color: #ffc640;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        max-width: 500px;
        margin: 0 auto;
    }

    h1 {
        color: #473e3b;
        font-size: 36px;
        margin: 0;
    }

    h2 {
        color: #473e3b;
        font-size: 24px;
        margin-top: 30px;
        margin-bottom: 10px;
        text-align: center;
    }

    nav ul {
        list-style-type: none;
        padding: 0;
    }

    nav ul li {
        margin-bottom: 10px;
    }

    nav ul li a {
        display: block;
        padding: 10px 20px;
        background-color: #473e3b;
        color: #ffffff;
        text-decoration: none;
        border-radius: 10px;
        max-width: 500px;
        margin: 0 auto;
    }

    nav ul li a:hover {
        background-color: #ffc640;
        color: #473e3b;
    }
    </style>
</head>
<body>
    <header>
        <h1>Inventaris Barang</h1>
    </header>

    <h2>Menu</h2>
    <nav>
        <ul>
            <li><a href="tambah.php">Tambah Data</a></li>
            <li><a href="lihat.php">Lihat barang</a></li>
        </ul>
    </nav>
</body>
</html>