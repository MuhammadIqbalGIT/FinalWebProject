<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman admin - Pesantren Tahfizh Al-Qur'an Daarul Hikmah</title>
    <link rel="stylesheet" href="styles.css">

    <?php
    // Mengaktifkan session
    session_start();

    // Memeriksa apakah session "status" berisi string "login"
    if ($_SESSION['status'] != "login") {
        // Jika tidak, alihkan halaman kembali ke halaman login dengan memberi parameter pesan yang berisi string "login_dulu"
        header("location:../index.php?pesan=login_dulu");
    }

    // Include the database connection file
    require_once ("dbConnection.php");

    // Fetch data in descending order (latest entry first)
    $result = mysqli_query($mysqli, "SELECT * FROM product ORDER BY id DESC");
    ?>

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
        #products {
            margin-top: 120px;
            /* Atur jarak antara header dan konten produk */
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .product-card {
            width: 200px;
            /* Adjust the width as needed */
            margin: 10px;
            /* Add margin for spacing between cards */
            display: inline-block;
            /* Ensure cards are displayed in a row */
            vertical-align: top;
            /* Align cards to the top of the container */
            border: 1px solid #ccc;
            /* Add border for visual separation */
            padding: 10px;
            /* Add padding inside each card */
            box-sizing: border-box;
            /* Include padding in the width calculation */
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

        .product-card .delete-product {
            position: absolute;
            top: 5px;
            right: 5px;
            color: #ff0000;
            /* Warna merah untuk ikon hapus */
            cursor: pointer;
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

        .add-product {
            position: fixed;
            top: 150px;
            /* Menentukan jarak dari atas */
            right: 20px;
            /* Menentukan jarak dari kanan */
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .logout {
            position: fixed;
            top: 200px;
            /* Menentukan jarak dari atas */
            right: 20px;
            /* Menentukan jarak dari kanan */
            background-color: #dc3545;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>

</head>

<body>

    <header class="header">
        <div class="container">
            <div class="logo">
                <img src="image/logo_pesantren.jpg" alt="Logo Pesantren Al-Hikmah">
                <h1>Pesantren Tahfizh Al-Qur'an Daarul Hikmah</h1>
            </div>
            <nav class="nav">
                <ul>

                </ul>
            </nav>
        </div>
    </header>

    <section id="products">
        <div class="container">
            <h2>List Produk</h2>

            <a href="add.php" class="add-product">Tambah Produk Baru</a>
            <a href="logout.php" class="logout">Keluar Aplikasi</a>

            <!-- Hapus link tambah produk -->

            <div class="product-grid">
                <!-- Tampilkan produk dari database -->
                <?php
                $sql = "SELECT * FROM product ORDER BY id DESC";
                $result = mysqli_query($conn, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='product-card'>";
                        echo "<div class='alb'>";
                        // Check if image field is empty
                        if (!empty($row['image'])) {
                            echo "<img src='uploads/" . $row['image'] . "' alt='" . $row['nama_product'] . "' />";
                        } else {
                            echo "<img src='image/defaultproduct.png' alt='Default Product Image' />";
                        }
                        echo "</div>";
                        echo "<h3>" . $row['nama_product'] . "</h3>";
                        echo "<p>Harga: " . $row['harga_product'] . "</p>"; // Display price
                        // Add checkbox for status if isActive exists
                        if (isset($row['isActive'])) {
                            // echo "<label class='switch'>";
                            // echo "<input type='checkbox' class='status-toggle' data-id='".$row['id']."' ".($row['isActive'] == 1 ? 'checked' : '').">";
                            // echo "<span class='slider round'></span>";
                            // Display appropriate label based on isActive value
                            if ($row['isActive'] == 1) {
                                echo "<p><span style='color:green;'>Produk Aktif</span></p>";
                            } else {
                                echo "<p><span style='color:red;'>Produk Tidak Aktif</span></p>";
                            }
                            echo "</label>";
                        } else {
                            echo "<p>Warning: isActive field not found.</p>";
                        }
                        echo "<a href=\"edit.php?id=" . $row['id'] . "\">Ubah Produk</a>";
                        echo "<a href=\"delete.php?id=" . $row['id'] . "\" onClick=\"return confirm('Apakah Anda yakin ingin menghapus produk ini?')\">Hapus Produk</a>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>Warning: No products found.</p>";
                }
                ?>
            </div>
        </div>
    </section>


</body>

</html>