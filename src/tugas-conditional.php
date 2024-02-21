<?php 

$pembeli = "andi";
$uang = 9000000;
$total_belanja = 7550000; 


echo "uang {$uang} <br>";
echo "total_belanja {$total_belanja} <br>";

if ($uang < $total_belanja) {
	$kembalian = 0;
}else{	
	if ($total_belanja >= 2000000 AND $total_belanja < 5000000) {
		// diskon 5%
		$diskon = ($total_belanja * 5) / 100;
		$total_belanja = $total_belanja - $diskon;
		$kembalian = $uang - $total_belanja;
		echo "dapat diskon 5% ({$diskon}) <br>";
		echo "total belanja menjadi {$total_belanja} <br>";
	}elseif ($total_belanja >= 5000000 AND $total_belanja < 10000000) {
		// diskon 10%
		$diskon = ($total_belanja * 10) / 100;
		$total_belanja = $total_belanja - $diskon;
		$kembalian = $uang - $total_belanja;
		echo "dapat diskon 10% ({$diskon}) <br>";
		echo "total belanja menjadi {$total_belanja} <br>";
	}elseif ($total_belanja >= 10000000) {
		// diskon 20%
		$diskon = ($total_belanja * 20) / 100;
		$total_belanja = $total_belanja - $diskon;
		$kembalian = $uang - $total_belanja;
		echo "dapat diskon 20% ({$diskon}) <br>";
		echo "total belanja menjadi {$total_belanja} <br>";
	}else{
		// pembelian kurang dari 2jt tidak dapat diskon
		$kembalian = $uang - $total_belanja;
		echo "tidak dapat diskon <br>";
		echo "total belanja menjadi {$total_belanja} <br>";
	}
}



echo "kembalian {$kembalian}";