<?php 

function hitung_kupon($total_kupon)
{
	$count = 1;
	$harga_kupon = 100;
	while ($count < $total_kupon) {
		$harga_kupon = $harga_kupon + $harga_kupon;
		// echo $harga_kupon;
		// echo "<br>";
		$count++;
	}
	return $harga_kupon;
}

function belanja($nama, $total_belanja, $uang)
{

	// hitung diskon dan kupon
	if ($total_belanja >= 2000000 AND $total_belanja < 5000000) {
		// disokn 5%
		// kupon 7
		$diskon = ($total_belanja * 5) / 100;
		$kupon = 7;
	}elseif ($total_belanja >= 5000000 AND $total_belanja < 10000000) {
		// disokn 10%
		// kupon 10
		$diskon = ($total_belanja * 10) / 100;
		$kupon = 10;
	}elseif ($total_belanja >= 10000000) {
		// disokn 20%
		// kupon 12
		$diskon = ($total_belanja * 20) / 100;
		$kupon = 12;
	}elseif ($total_belanja < 2000000) {
		// tidak ada diskon
		// kupon 5
		$diskon = 0;
		$kupon = 5;
	}else{
		// tidak ada diskon dan kupon
		$diskon = 0;
		$kupon = 0;
	}


	// kalkulasi
	$kembalian_awal = $uang - ($total_belanja - $diskon); // 2205000
	$nilai_kupon = hitung_kupon($kupon); // harus nulianya 51200
	$kembalian_akhir = $kembalian_awal + $nilai_kupon;

	return $kembalian_akhir;
}

echo belanja("andi", 7550000, 9000000);
// 2256200
// echo "<br>";
// echo belanja("jojo", 8550000, 9000000);
// echo "<br>";
// echo belanja("kokoh", 5550000, 9000000);

// Misalkan, Andi membeli barang-barang elektronik dengan total belanjaan
// Rp. 7.550.000, dan Andi memberikan uang senilai Rp. 9.000.000 untuk
// membayarnya, maka kembalian yang Andi terima adalah Rp. 2.256.200