<?php
session_start();
include "./pages/db.php";

// Ambil URI setelah domain
$request = trim(str_replace("/KosPelitaHarapan", "", parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)), "/");

// Definisikan routing yang sesuai
$routes = [
    "" => "pages/home.php", // Halaman utama
    "home" => "pages/home.php",
    "koneksi" => "pages/db.php", // Ubah agar bisa diakses dengan /koneksi
    "info" => "pages/info.php",
];

// Cek apakah request ada dalam daftar endpoint
if (array_key_exists($request, $routes)) {
    include $routes[$request];
} else {
    http_response_code(404);
    echo "404 Not Found";
}
?>
