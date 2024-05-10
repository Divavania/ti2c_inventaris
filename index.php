<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaris</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #e0f2f1;
            color: #333;
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        header {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 2.5em;
            color: #3498db;
        }

        nav {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        li {
            display: inline-block;
            margin-right: 20px;
        }

        a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.2s ease-in-out;
        }

        a:hover {
            color: #2980b9;
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