<?php
$stok_produk = 100;
$harga_per_unit = 2000;
$unit_terjual = 30;
$pendapatan_kotor = $unit_terjual * $harga_per_unit;
$inventori_tersisa = $stok_produk - $unit_terjual;

echo "Stok Produk Awal: " . $stok_produk . "<br>";
echo "Unit yang Terjual: " . $unit_terjual . "<br>";
echo "Total Pendapatan Kotor: " . $pendapatan_kotor . "<br>";
echo "Inventori yang Tersisa: " . $inventori_tersisa . "<br>";
?>