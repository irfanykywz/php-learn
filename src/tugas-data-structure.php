<?php 


$subs = [
	149000, // Paket Harmoni
	219000, // Paket Ritme
	299000 // Paket Melodi
];

$beli = 0; // paket harmoni dalam array
$jumlah = 2; // dalam bulan

$bayar = $subs[$beli] * $jumlah;

echo $bayar;

