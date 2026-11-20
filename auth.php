<?php
// Penjaga halaman: dipanggil di setiap halaman yang wajib login.
// Syarat: koneksi.php sudah dipanggil lebih dulu (untuk session & redirect).
if (!isset($_SESSION['pengguna'])) {
redirect('login.php', 'warning', 'Silakan login terlebih dahulu.');
}