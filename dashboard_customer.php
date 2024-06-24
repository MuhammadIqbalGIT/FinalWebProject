<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    require_once ("admin/dbConnection.php");

    $result = mysqli_query($conn, "SELECT * FROM product ORDER BY id DESC");
    ?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online Muhammad Iqbal</title>
    <link rel="stylesheet" href="styles.css">
    <style>

    body {
        background-color: #f4f4f4;
        font-family: 'Times New Roman', Times, serif;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: rgba(141, 178, 85, 0.8);
        padding: 15px 0;
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    header .logo {
        display: flex;
        align-items: center;
    }

    header .logo img {
        border-radius: 50%;
        width: 70px;
        height: auto;
        margin-right: 20px;
    }

    header .logo h1 {
        margin: 0;
        color: #fff;
    }

    header .nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    header .nav ul li {
        display: inline;
    }

    header .nav ul li a {
        text-decoration: none;
        color: #fff;
        padding: 10px;
    }

    header .nav ul li a:hover {
        background-color: rgba(255, 255, 255, 0.3);
        border-radius: 5px;
    }
    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        padding-top: 100px;
    }

    .info-card {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .product-card {
        margin-bottom: 20px;
    }

    .product-card img {
        max-width: 100%;
        border-radius: 8px;
    }

    .product-card h3 {
        margin-top: 10px;
        font-size: 18px;
        color: #333333;
    }

    .product-card p {
        color: #666666;
    }

    .product-card .price {
        font-weight: bold;
        color: #008000;
    }

    .product-card a {
        display: block;
        margin-top: 10px;
        text-align: center;
        color: #ffffff;
        background-color: #8DB255;
        padding: 10px;
        border-radius: 5px;
        text-decoration: none;
    }

    .product-card a:hover {
        background-color: #6e903e;
    }

    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        padding-top: 100px;
    }

    .product-card {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        text-align: center;
        width: 200px;
        margin: 0 auto;
    }

    .product-card img {
        max-width: 100%;
        height: auto;
    }

    .product-card .order-whatsapp {
        display: block;
        margin-top: 10px;
        padding: 5px 10px;
        background-color: #4CAF50;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    .product-card .order-whatsapp:hover {
        background-color: #45a049;
    }

    section#contact {
        background-color: #333;
        color: #fff;
        padding: 1px 0;
        border-radius: 1px;
    }

    .info-card {
        background-color: #f8f9fa;
        border: none;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        min-height: fit-content;
    }
    </style>

</head>

<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <!-- <img src="image/logo_iqbal.jpg" alt="Logo iqbal"> -->
                <h1>Toko Online Muhammad Iqbal</h1>
            </div>
            <nav class="nav">
                <ul>
                    <!-- <li><a href="about.php">Tentang Kami</a></li>
                    <li><a href="ppdb.php">Informasi PPDB</a></li>
                    <li><a href="activity.php">Kegiatan Santri</a></li>
                    <li><a href="galery.php">Galeri</a></li>
                    <li><a href="contact.php">Kontak</a></li> -->
                    <li><a href="index.php">Login Sebagai Admin</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="about">
        <div class="container">
            <h2></h2>
            <p></p>
        </div>
    </section>



    <div class="col-lg-6">
        <div class="card info-card mb-4">
            <div class="card-body">
                <section id="products">
                    <div class="container">
                        <h2>List Produk</h2>
                        <div class="product-grid">
                            <?php
                            $sql = "SELECT * FROM product WHERE isActive = 1 ORDER BY id DESC";
                            $result = mysqli_query($conn, $sql);

                            if ($result && mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<div class='product-card'>";
                                    echo "<div class='alb'>";
                                    // Check if image field is empty
                                    if (!empty($row['image'])) {
                                        echo "<img src='admin/uploads/" . $row['image'] . "' alt='" . $row['nama_product'] . "' />";
                                    } else {
                                        echo "<img src='admin/image/defaultproduct.png' alt='Default Product Image' />";
                                    }
                                    echo "</div>";
                                    echo "<h3>" . $row['nama_product'] . "</h3>";
                                    echo "<div class='product-details'>";
                                    echo "<p>Harga: " . $row['harga_product'] . "</p>"; // Display price
                                    echo "<p>Stok: " . $row['stock_product'] . "</p>"; // Display stock
                                    echo "<p>Satuan: " . $row['satuan_product'] . "</p>"; // Display unit
                                    echo "</div>";
                                    echo "<a href='https://api.whatsapp.com/send?phone=6289665107636&text=Order%20" . $row['nama_product'] . "' target='_blank' class='order-whatsapp'>Order to WhatsApp</a>";
                                    echo "</div>";
                                }
                            } else {
                                echo "<p>Warning: No active products found.</p>";
                            }
                            ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>







    <section id="contact">
        <div class="container">
            <h2>Kontak Kami</h2>
            <p>Jika Anda memiliki pertanyaan, silakan hubungi saya melalui:</p>
            <p>Email: iqbalvzr@gmail.com</p>
            <p>Telepon: 089665107636</p>
            <p>Alamat: Jl. Kyai Dayung Pamulang II</p>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Toko Online Muhammad Iqbal. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>