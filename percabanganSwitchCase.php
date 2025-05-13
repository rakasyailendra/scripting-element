<?php
$tanggal = strtotime('2025-05-10');
$hari_inggris = date("l", $tanggal);

switch($hari_inggris) {
    case "Monday": $hari_indonesia = "Senin"; break;
    case "Tuesday": $hari_indonesia = "Selasa"; break;
    case "Wednesday": $hari_indonesia = "Rabu"; break;
    case "Thursday": $hari_indonesia = "Kamis"; break;
    case "Friday": $hari_indonesia = "Jumat"; break;
    case "Saturday": $hari_indonesia = "Sabtu"; break;
    case "Sunday": $hari_indonesia = "Minggu"; break;
}

echo "Sekarang hari " . $hari_indonesia . ", " . date("d F Y", $tanggal);
?>
