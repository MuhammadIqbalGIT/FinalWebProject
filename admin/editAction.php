<?php
require_once ("dbConnection.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $name = $_POST['nama_product'];
    $satuan = $_POST['satuan_product'];
    $stock = $_POST['stock_product'];
    $harga = $_POST['harga_product'];

    $isActive = isset($_POST['isActive']) ? $_POST['isActive'] : 0;

    if (empty($name) || empty($satuan) || empty($stock) || empty($harga)) {
        $error = "Semua kolom (kecuali gambar) harus diisi!";
        echo "<script>alert('$error');</script>";
        echo "<script>window.history.back();</script>";
        exit();
    }

    if ($stock < 0 || $harga < 0) {
        $error = "Stok dan harga tidak boleh negatif!";
        echo "<script>alert('$error');</script>";
        echo "<script>window.history.back();</script>";
        exit();
    }

    if (isset($_FILES['my_image']) && $_FILES['my_image']['error'] === UPLOAD_ERR_OK) {
        $file_name = $_FILES['my_image']['name'];
        $file_size = $_FILES['my_image']['size'];
        $file_tmp = $_FILES['my_image']['tmp_name'];
        $file_type = $_FILES['my_image']['type'];
        $file_name_parts = explode('.', $_FILES['my_image']['name']);
        $file_ext = strtolower(end($file_name_parts));

        $extensions = array("jpeg", "jpg", "png");

        if (!in_array($file_ext, $extensions)) {
            $error = "Ekstensi tidak diizinkan, silakan pilih file JPEG atau PNG.";
            echo "<script>alert('$error');</script>";
            echo "<script>window.history.back();</script>";
            exit();
        }

        if ($file_size > 5242880) {
            $error = "Ukuran file harus kurang dari 5 MB.";
            echo "<script>alert('$error');</script>";
            echo "<script>window.history.back();</script>"; 
            exit();
        }

        move_uploaded_file($file_tmp, "uploads/" . $file_name);
    } else {
        $file_name = $_POST['old_image'];
    }


    $result = mysqli_query($conn, "UPDATE product SET nama_product='$name', satuan_product='$satuan', image='$file_name', stock_product='$stock', harga_product='$harga', isActive='$isActive' WHERE id='$id'");

    if ($result) {
        echo "<script>alert('Produk berhasil diperbarui.');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui produk.');</script>";
    }
}
?>