<?php
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = ""; // keep empty unless you set a password in MySQL
$DB_NAME = "library_db";

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}
echo "✅ Database connected successfully!";
