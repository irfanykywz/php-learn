<?php 


/**
function di php digunakan untuk menjalankan fungsi yang bisa digunakan kembali
di php ada function yang sudah ada dari bawaannya (built-in) dan dibuat secara manual

katakanlah ada sebuah proses yang selalu diulang ulang, maka proses tersebut bisa dibuatkan fungsinya agar tidak terus menerus menulis kode yang sama (dont repat you self)
*/

declare(strict_types=1);


function jumlahkan($params1, $params2)
{
	return $params1 + $params2;
}

echo jumlahkan(50, 50);
echo "<br>";

// mengatur nilai default untuk parameter 2
function jumlahkan_2($params1, $params2 = 5)
{
	return $params1 + $params2 ;
}

echo jumlahkan_2(50);
echo "<br>";