<?php
$nilai_praktikum_php = 90;
$nilai_praktikum_jarkom = 50;

if ($nilai_praktikum_php > $nilai_praktikum_jarkom) {
    echo 'Praktikum PHP di kelas Pemweb B081 lebih mudah daripada Praktikum Jarkom';
} elseif ($nilai_praktikum_php == $nilai_praktikum_jarkom) {
    echo 'Tingkat kesulitan Praktikum PHP dan Jarkom di kelas Pemweb B081 sama';
} else {
    echo 'Praktikum Jarkom lebih mudah daripada Praktikum PHP di kelas Pemweb B081';
}
?>