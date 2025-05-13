<?php
$nama = "M Rakha Syailendra";


function bukan_reference($nama_param) {
    $nama_param .= " Memang Tidak Gaul";
    echo "<br>Di dalam fungsi (tanpa reference): " . $nama_param;
}

echo "Nama awal: " . $nama;
bukan_reference($nama); 
echo "<br>Setelah fungsi tanpa reference: " . $nama;


function dengan_reference(&$nama_param) {
    $nama_param .= " Memang Paling Gaul";
    echo "<br><br>Di dalam fungsi (dengan reference): " . $nama_param;
}

dengan_reference($nama);
echo "<br>Setelah fungsi dengan reference: " . $nama;
?>