<!DOCTYPE html>
<html>

<head>
    <title>Add Data</title>
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 10px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="modal" id="myModal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="modal-message"></p>
        </div>
    </div>

    <script>
        var modal = document.getElementById("myModal");

        var span = document.getElementsByClassName("close")[0];

        span.onclick = function () {
            modal.style.display = "none";
            window.location.href = "add.php";
        }

        function displayModal(message) {
            var modalMessage = document.getElementById("modal-message");
            modalMessage.innerHTML = message;
            modal.style.display = "block";
        }
    </script>

    <?php
    require_once ("dbConnection.php");

    $error = $success = "";

    if (isset($_POST['submit'])) {
       
        if (empty($_POST['nama_product']) || empty($_POST['satuan_product']) || empty($_POST['stock_product']) || empty($_POST['harga_product'])) {
            $error = "Harap Isi Semua Field";
            echo "<script>alert('$error');</script>";
            echo "<script>window.history.back();</script>";
            exit();
        }

        $name = mysqli_real_escape_string($mysqli, $_POST['nama_product']);
        $satuan = mysqli_real_escape_string($mysqli, $_POST['satuan_product']);
        $stock = mysqli_real_escape_string($mysqli, $_POST['stock_product']);
        $harga = mysqli_real_escape_string($mysqli, $_POST['harga_product']);
        $isActive = 1;

        if (isset($_FILES['my_image'])) {
            $file_name = $_FILES['my_image']['name'];
            $file_size = $_FILES['my_image']['size'];
            $file_tmp = $_FILES['my_image']['tmp_name'];
            $file_type = $_FILES['my_image']['type'];
            $file_name_parts = explode('.', $_FILES['my_image']['name']);
            $file_ext = strtolower(end($file_name_parts));

            $extensions = array("jpeg", "jpg", "png");

            if (in_array($file_ext, $extensions) === false) {
                $error = "Mohon upload gambar berupa JPEG atau PNG file.";
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
            $file_name = "defaultproduct.png";
        }

        $result = mysqli_query($mysqli, "INSERT INTO product (nama_product, satuan_product, image, stock_product, harga_product, isActive) VALUES ('$name', '$satuan', '$file_name', '$stock', '$harga',$isActive)");

        if ($result) {
            $success = "Data Product Berhasil ditambahkan";
            echo "<script>displayModal('$success');</script>";
            exit();
        } else {
            $error = "Error: Data Product gagal ditambahkan";
            echo "<script>displayModal('$error');</script>";
            exit();
        }
    }
    ?>
</body>

</html>