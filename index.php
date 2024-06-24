<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesantren Website</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      background-color: #f4f4f4;
      font-family: 'Times New Roman', Times, serif;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    header {
      background-color: rgba(141, 178, 85, 0.8);
      padding: 15px 0;
      width: 100%;
    }

    .container {
      max-width: 1000px;
      margin: 0 auto;
      position: relative;
      padding: 0 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header .logo img {
      border-radius: 50%;
      width: 70px;
      height: auto;
      margin-right: -100px;
    }

    header .logo h1 {
      margin: 0;
      margin-bottom: 20px;
      padding-left: 80px;
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

    .login-form {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      margin: auto;
      margin-top: 20px;
      width: 80%;
    }

    .login-form input[type="text"],
    .login-form input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .login-form input[type="submit"] {
      width: 100%;
      background-color: #8DB255;
      color: #ffffff;
      border: none;
      padding: 10px;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 20px;
    }

    .login-form input[type="submit"]:hover {
      background-color: #6e903e;
    }

    footer {
      background-color: rgba(141, 178, 85, 0.8);
      color: #fff;
      padding: 15px 0;
      width: 100%;
      margin-top: auto;
    }

    footer p {
      margin: 0;
      text-align: center;
    }

    @media screen and (max-width: 768px) {
      header .logo h1 {
        padding-left: 10px;
      }
    }

    @media screen and (max-width: 576px) {
      .container {
        flex-direction: column;
        align-items: flex-start;
      }

      header .nav {
        margin-top: 20px;
      }

      .login-form {
        width: 100%;
      }
      .error-card {
      background-color: #f8d7da;
      border-color: #f5c6cb;
      color: #721c24;
      padding: 1rem;
      margin: 20px auto;
      border-radius: 0.25rem;
      max-width: 400px;
    }

    .error-message {
      margin-bottom: 0;
    }
    }
  </style>
  <script>
    function showPassword() {
      var passwordField = document.getElementById("password");
      if (passwordField.type === "password") {
        passwordField.type = "text";
      } else {
        passwordField.type = "password";
      }
    }
  </script>
</head>

<body>

  <header class="header">
    <div class="container">
      <div class="logo">
        <!-- <img src="image/logo_pesantren.jpg" alt="Logo"> -->
      </div>
      <h1 style="color: white;">Toko Online Muhammad Iqbal</h1>
      <nav class="nav">
        <ul>
          <li><a href="dashboard_customer.php">Home</a></li>
          <!-- <li><a href="contact.php">Kontak</a></li> -->
        </ul>
      </nav>
    </div>
  </header>

  <form class="login-form" action="periksa_login.php" method="POST">
    <label>Username</label>
    <input type="text" name="username" required="required">

    <br><br>

    <label>Password</label>
    <input type="password" name="password" id="password" required="required">
    <label for="show-password" style="margin-left: 10px;">Tampilkan Password</label>
    <input type="checkbox" id="show-password" onclick="showPassword()">

   
    <?php
    if (isset($_GET['pesan'])) {
      $error_message = "";

      if ($_GET['pesan'] == "gagal") {
        $error_message = "Maaf, Username dan password salah!";

       //Message untuk Log out
      } else if ($_GET['pesan'] == "logout") {
        $error_message = "Terima kasih, Anda telah logout!";

      } else if ($_GET['pesan'] == "login_dulu") {
        $error_message = "Silahkan login untuk masuk ke dashboard!";
      }

      echo "<div class='error-card'>
            <p class='error-message'>$error_message</p>
          </div>";
    }
    ?>


    <br><br>

    <input type="submit" name="submit" value="LOGIN">
  </form>


  <footer style="text-align: center;">
    <p>&copy; 2024 Toko Online Muhammad Iqbal. All rights reserved.</p>
  </footer>

</body>

</html>