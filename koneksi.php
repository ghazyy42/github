<?php
$servername = "localhost"; // atau nama server SQL Anda
$database = "db_users";
$username = "root"; // ganti dengan username SQL Server Anda
$password = "";  // ganti dengan password SQL Server Anda

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
    die ("koneksi gagal1 : " .mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}