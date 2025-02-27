<?php
$host = "localhost";
$user = "root"; // Default user XAMPP
$pass = "";     // Kosongkan jika tidak ada password
$db   = "bio-room";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
