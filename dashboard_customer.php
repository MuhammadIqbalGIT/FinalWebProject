<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    // Include the database connection file
    require_once ("admin/dbConnection.php");

    // Fetch data in descending order (latest entry first)
    $result = mysqli_query($mysqli, "SELECT * FROM product ORDER BY id DESC");
    ?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesantren Website</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    /* Gaya tambahan untuk nuansa pesantren */
    body {
        background-color: #f4f4f4;
        font-family: 'Times New Roman', Times, serif;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: rgba(141, 178, 85, 0.8);
        /* Warna header dengan efek transparan */
        padding: 15px 0;
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
        /* Pastikan header ada di atas konten */
        display: flex;
        align-items: center;
        /* Mengatur logo dan navigasi berada di tengah vertikal */
        justify-content: space-between;
        /* Menyebarkan elemen di header */
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
        /* Membuat gambar logo berbentuk bulat */
        width: 70px;
        /* Mengatur ukuran gambar logo */
        height: auto;
        margin-right: 20px;
        /* Memberikan ruang antara logo dan teks */
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
        /* Efek hover untuk link */
        border-radius: 5px;
    }

    /* Gaya tambahan untuk grid produk */
    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        padding-top: 100px;
        /* Padding tambahan untuk memberi ruang di bawah header */
    }

    .info-card {
        background-color: #ffffff;
        /* Warna latar belakang */
        border-radius: 10px;
        /* Melengkungkan sudut kartu */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        /* Memberikan bayangan */
        padding: 20px;
        /* Memberikan ruang di dalam kartu */
    }

    .product-card {
        margin-bottom: 20px;
        /* Memberikan jarak antar kartu produk */
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
        /* Padding tambahan untuk memberi ruang di bawah header */
    }

    .product-card {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        text-align: center;
        width: 200px;
        /* Lebar tetap untuk setiap kartu */
        margin: 0 auto;
        /* Tengahkan kartu di dalam grid */
    }

    .product-card img {
        max-width: 100%;
        /* Gambar akan sesuaikan dengan lebar container */
        height: auto;
    }

    .product-card .order-whatsapp {
        display: block;
        margin-top: 10px;
        padding: 5px 10px;
        background-color: #4CAF50;
        /* Ubah warna tombol menjadi hijau */
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    .product-card .order-whatsapp:hover {
        background-color: #45a049;
        /* Warna hover sedikit lebih gelap */
    }

    section#contact {
        background-color: #333;
        color: #fff;
        /* Warna teks putih */
        padding: 1px 0;
        /* Ruang di sekitar konten */
        border-radius: 1px;
        /* Radius sudut */
    }

    /* Custom CSS untuk card */
    .info-card {
        background-color: #f8f9fa;
        border: none;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        min-height: fit-content;
        /* Tambahkan properti min-height */
    }
    </style>

</head>

<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <img src="image/logo_pesantren.jpg" alt="Logo Pesantren Al-Hikmah">
                <h1>Produk Kemandirian Pontren Daarul Hikmah</h1>
            </div>
            <nav class="nav">
                <ul>
                    <li><a href="about.php">Tentang Kami</a></li>
                    <li><a href="ppdb.php">Informasi PPDB</a></li>
                    <!-- <li><a href="activity.php">Kegiatan Santri</a></li>
                    <li><a href="galery.php">Galeri</a></li> -->
                    <li><a href="contact.php">Kontak</a></li>
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
                            <!-- Tampilkan produk dari database -->
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
                                    echo "<a href='https://api.whatsapp.com/send?phone=6282311265619&text=Order%20" . $row['nama_product'] . "' target='_blank' class='order-whatsapp'>Order to WhatsApp</a>";
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
            <p>Jika Anda memiliki pertanyaan atau ingin mendaftar, silakan hubungi kami melalui:</p>
            <p>Email: Info@Pesantrendaarulhikmah.Com</p>
            <p>Telepon: (021) 22748530</p>
            <p>Alamat: Jl. Kamelia, Kav. B. 17&18, Perum Bukit Nusa Indah, Serua, Kec. Ciputat, Kota Tangerang Selatan,
                Banten 15414</p>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Pesantren Tahfizh Al-Qur'an Daarul Hikmah. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>