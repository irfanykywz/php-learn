<?php 


$kata = 'Programmer';
$indicator = 'r';

$count = 0;
foreach (str_split($kata) as $huruf) {
	if ($huruf == $indicator) {
		$count++;
	}
}

echo "dari kata {$kata} huruf {$indicator} ditemukan berjumlah {$count}";