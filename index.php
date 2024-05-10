<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaris</title>
    <style>
        /* General styles */
    body {
      font-family: 'Roboto', sans-serif; /* Choose a modern, sans-serif font */
      background-color: #e0f2f1; /* Light blue background */
      color: #333; /* Dark text color for readability */
      padding: 20px; /* Add some padding for spacing */
      max-width: 800px; /* Limit the overall body width */
      margin: 0 auto; /* Center the content horizontally */
    }

    /* Header styles */
    header {
      background-color: #fff; /* White header background */
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
      padding: 20px;
      text-align: center;
    }

    h1 {
      font-size: 2.5em; /* Larger heading size */
      color: #3498db; /* Primary blue color */
    }

    /* Navigation styles */
    nav {
      background-color: #fff; /* White navigation background */
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
      padding: 15px;
      margin-bottom: 30px; /* Increase space before main content */
      display: flex; /* Use flexbox for horizontal navigation */
      justify-content: space-between; /* Space out navigation items */
      align-items: center; /* Center content horizontally */
    }

    ul {
      list-style: none; /* Remove default bullet points */
      padding: 0; /* Remove default padding */
      margin: 0; /* Remove default margin */
      text-align: center; /* Center list items horizontally (optional) */
    }

    li {
      display: inline-block; /* Display list items inline for spacing */
      margin-right: 20px; /* Add spacing between list items */
    }

    a {
      color: #3498db; /* Primary blue color for links */
      text-decoration: none; /* Remove underline from links */
      font-weight: bold; /* Make links stand out */
      transition: color 0.2s ease-in-out; /* Smooth hover effect */
    }

    a:hover {
      color: #2980b9; /* Darker blue color on hover */
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