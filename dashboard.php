<?php
require 'koneksi.php';
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header('Location: login.html');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css"> <!-- Tambahkan file CSS jika diperlukan -->
</head>
<body>
    <header>
        <h1>Selamat Datang di Dashboard</h1>
    </header>
    <nav>
        <ul>
            <li><a href="profile.html">Profil</a></li>
            <li><a href="settings.html">Pengaturan</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>Informasi Penting</h2>
            <p>Selamat datang, <?php echo htmlspecialchars($_SESSION['username']); ?>! Anda berhasil login.</p>
        </section>
        <section>
            <h2>Aktivitas Terbaru</h2>
            <p>Berikut adalah aktivitas terbaru Anda...</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Perusahaan Anda. Semua hak dilindungi.</p>
    </footer>
</body>
</html>
