<?php 
//memulai session jika belum / (untuk mengembalikan status session)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// hapus semua session
$_SESSION = [];
session_unset();
session_destroy();

// redirect ke halaman login
header('Location: login.php');
exit;
?>