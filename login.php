<?php
// Menyertakan file koneksi
require 'koneksi.php'; // Menggunakan require untuk memastikan file koneksi.php ada

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Mencegah SQL Injection
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Query untuk memeriksa pengguna
    $query_sql = "SELECT * FROM tb_users2 WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($conn, $query_sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['username'] = $user['username'];
        header('Location: dashboard.php');
    } else {
        echo "<center>Login gagal</center>";
    }
}
?>
