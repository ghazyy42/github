<?php
// Menyertakan file koneksi
require 'koneksi.php';

// Memulai sesi
session_start();

// Memeriksa apakah form registrasi telah disubmit

    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];

    // Mencegah SQL Injection
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $username = mysqli_real_escape_string($conn, $username);


    // Query untuk memasukkan data pengguna baru
    $query_sql = "INSERT INTO tb_users2 (email, password, username) VALUES ('$email', '$password', '$username')";
    
    if (mysqli_query($conn, $query_sql)) {
        // Registrasi berhasil
        header('Location: login.html');
    } else {
        // Registrasi gagal
        echo "pendaftaran gagl : " . mysqli_error($conn);
    }

?>
