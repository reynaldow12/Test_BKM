<?php
$tgl1 = strtotime("2020-05-01");
$tgl2 = strtotime("1996-07-05");

//Validasi Hitung Usia
$hitung = abs($tgl2 - $tgl1);
$tahun = 365*24*60*60;
$bulan = 30*24*60*60;
$hari = 24**60*60;

$hitung_tahun = floor($hitung/$tahun);
$hitung_bulan = floor(($hitung - ($hitung_tahun * $tahun))/$bulan);
$hitung_hari = floor(($hitung - ($hitung_tahun * $tahun) - ($hitung_bulan * $bulan))/$hari);
echo "Usia Saya adalah $hitung_tahun tahun, $hitung_bulan bulan, $hitung_hari hari";
?>