<?php

$username = $_POST['username'];
$password = $_POST['password'];


$users = array(
	"iqbal" => "iqbalitmss",
	"ponpes" => "ponpesserua"
);

// Memeriksa apakah username dan password yang dimasukkan cocok dengan data pengguna
if (isset($users[$username]) && $users[$username] == $password) {
	// Aktifkan session
	session_start();
	// Buat session username dan session status. Session username berisi username, dan session status berisi string "login"
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";

	// Setelah session dibuat, alihkan halaman ke halaman dashboard sesuai dengan hak akses pengguna
	if ($username == "iqbal") {
		header("location: admin/index.php");
	} else if ($username == "ponpes") {
		header("location: admin/index.php");
	}
} else {
	// Jika login gagal, alihkan halaman kembali ke halaman login dengan membuat parameter pesan yang berisi "gagal"
	header("location: index.php?pesan=gagal");
}
?>



<!-- <?php
// menangkap data username dan password yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// memeriksa apakah username yang diisi adalah "admin", dan password yang diisi adalah "admin123"
// if ($username == "iqbal" && $password == "iqbalitmss") {
// 	// aktifkan session
// 	session_start();
// 	// buat session username dan session status. session username berisi username, dan session status berisi string "login"
// 	$_SESSION['username'] = $username;
// 	$_SESSION['status'] = "login";

// 	// setelah session dibuat, alihkan halaman ke halaman dashboard admin
// 	header("location:admin/index.php");
// } else {
// 	// jika login gagal, alihkan halaman kembali ke halaman login dengan membuat parameter pesan yang berisi "gagal"
// 	header("location:index.php?pesan=gagal");
// }
?> -->