<?php 

/**

kondisi digunakan untuk perbandingan tertentu atau pengambilan keputusan dari sebuah kode

kataknlah ada 2 jalan bercabang maka salah satu jalan tersebut harus dilalui, untuk memilihnya maka biasanya akan ada pertimbangan kenapa harus memilih salah satu jalan yang ada dan alasannya kenapa....

operator pembanding
[>] lebih besar dari
[<] lebih kecil dari
[==][===] sama dengan
[!=][!==]  tidak sama dengan
[>=] lebih besar atau sama dengan
[<=] leebih kecil atau sama dengan

operator logika
[AND][&&] = dan
[OR][||] = atau
[NOT][1] = bukan


percabangan
if
switch

*/

if (true == false) {
	echo "nilai ditemukan";
}else{
	echo "nilai tidak ada";
}

echo "<br/>";

$name = "aku";
$nilai = 5;
if ($name === "aku") {
	if ($nilai < 7) {
		echo "{$name} tidak lulus";
	}elseif ($nilai >= 7) {
		echo "{$name} lulus";
	}else{
		echo "nilai tidak ada dalam kriteria";
	}
}else{
	echo "nama tidak ditemukan";
}

echo "<br/>";

$criteria = "jojo";
switch ($criteria) {
	case 'jojo':
	echo "jojo ditemukan";
	break;
	
	default:
	echo "tidak ada yang ditemukan";
	break;
}