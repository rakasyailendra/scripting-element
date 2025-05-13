<?php 
$nama = "M Rakha Syailendra"; 
$nilai_uts_pemwebB = 'A'; 
$nilai_uas_pemwebB = 'A'; 
$bentuk_boolean = true; 

echo "Nama Mahasiswa: " . $nama . "<br>";
echo "Nilai UTS Pemweb B: " . $nilai_uts_pemwebB . "<br>";
echo "Nilai UAS Pemweb B: " . $nilai_uas_pemwebB . "<br>";

if($bentuk_boolean == true) {
    echo "Boolean menunjukkan nilai benar<br>";
}


$nilai_uts_numerik = ($nilai_uts_pemwebB == 'A') ? 4.0 : 0; 
$nilai_uas_numerik = ($nilai_uas_pemwebB == 'A') ? 4 : 0;   

// Konversi ke float
$nilai_uts_float = (float)$nilai_uts_numerik;
// Konversi ke integer
$nilai_uas_integer = (int)$nilai_uas_numerik;

echo "Nilai UTS setelah dikonversi float: " . $nilai_uts_float . "<br>";
echo "Nilai UAS setelah dikonversi integer: " . $nilai_uas_integer . "<br>";
?>