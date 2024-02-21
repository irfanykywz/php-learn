<?php 

/*
loop adalah menjalankan perintah secara berulang...
ada 2 jenis loop yang bisa digunakan yaitu

- for
- foreach
- while
- do while
*/

$kata = "saya adalah baris ke %s";
$ulang = 5;

for ($i=0; $i < $ulang; $i++) { 
	echo sprintf($kata, $i);
	echo "<br/>";
}

echo "<br/>";

$i = 0;
while ($i <= $ulang) {
	echo sprintf($kata, $i);
	echo "<br/>";

	$i++;
}

echo "<br/>";

$i = 0;
do {
	echo sprintf($kata, $i);
	echo "<br/>";

	$i++;
} while ($i <= $ulang);


echo "<br/>";


$data = [
	[
		"name" => "jojo",
		"money" => 1000000
	],
	[
		"name" => "joja",
		"money" => 1200000
	],
	[
		"name" => "juju",
		"money" => 1300000
	],
	[
		"name" => "huhu",
		"money" => 1400000
	],
	[
		"name" => "hehe",
		"money" => 1500000
	],
];

foreach ($data as $key => $value) {
	echo "data dari index {$key} nama {$value['name']} money {$value['money']}";
	echo "<br/>";
}