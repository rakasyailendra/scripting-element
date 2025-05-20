<?php
$nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '';
echo "Nama: " . ($nama ?: 'Data Belum disi ') . "<br>";
?>