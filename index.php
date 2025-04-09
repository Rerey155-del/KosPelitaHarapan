<link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

<?php
session_start();
include "./pages/db.php";

// Ambil URI setelah domain
$request = trim(str_replace("/KosPelitaHarapan", "", parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)), "/");

// Definisikan routing yang sesuai
$routes = [
    "" => "pages/home.php", 
    "home" => "pages/home.php",
    "koneksi" => "pages/db.php", 
    "info" => "pages/info.php",
    "login" => "pages/login.php",
    "products" => "pages/users/product.php",
];

// Cek apakah request ada dalam daftar endpoint
if (array_key_exists($request, $routes)) {
    include $routes[$request];
} else {
    http_response_code(404);
    echo "404 Not Found";
}
?>
