<?php
$DB_HOST = "localhost";
$DB_USER = "root";   // default user in XAMPP
$DB_PASS = "";       
$DB_NAME = "library_db"; 

$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if (!$conn) {
    die(" Database connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4"); // support all characters


// set this once and use it across your includes
define('BASE_URL', '/library');   
?>
