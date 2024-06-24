<?php

$username = $_POST['username'];
$password = $_POST['password'];


$users = array(
	"iqbal" => "iqbalitmss",
	"ponpes" => "ponpesserua"
);

if (isset($users[$username]) && $users[$username] == $password) {
	session_start();

	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";

	if ($username == "iqbal") {
		header("location: admin/index.php");
	} else if ($username == "ponpes") {
		header("location: admin/index.php");
	}
} else {
	header("location: index.php?pesan=gagal");
}
?>