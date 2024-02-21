<?php  

/**
 * penulisan variable diawali menggunakan simbol $ dilanjut dengan nama variable
 * type data di php :
 * - string
 * - integer
 * - float
 * - boolean
 * - array
 * - object
 */

$data_str = "ini adalah string";
echo $data_str;
echo PHP_EOL;
var_dump($data_str);
echo PHP_EOL;

$data_int = 123;
echo $data_int;
echo PHP_EOL;
var_dump($data_int);
echo PHP_EOL;

$data_float = 1.5;
echo $data_float;
echo PHP_EOL;
var_dump($data_float);
echo PHP_EOL;

$data_boolean = false;
echo $data_boolean;
echo PHP_EOL;
var_dump($data_boolean);
echo PHP_EOL;


/**
 * array
 * array biasa memiliki index, dimulai dari angka 0
 */
$data_array = ["halo", "ini", "data", "array", "123", 123];
echo $data_array[0];
echo PHP_EOL;
var_dump($data_array);
echo PHP_EOL;

/**
 * array associative
 * menggunakan key untuk menampung datanya
 */
$data_array_associative = [
	"key" => "value",
	"name" => "jojo"
];
echo $data_array_associative["name"];
echo PHP_EOL;
var_dump($data_array_associative);
echo PHP_EOL;

/**
 * array multidimensional
 * kumpulan array dalam jumlah banyak
 */
$data_array_multidimensional = [
	[
		"name" => "jojo",
		"age" => 12,
		"money" => 2000
	],
	[
		"name" => "joko",
		"age" => 11,
		"money" => 1500
	],
];
echo $data_array_multidimensional[0]["name"];
echo PHP_EOL;
var_dump($data_array_multidimensional);
echo PHP_EOL;

/**
 * object
 */
$data_object = (object)[
	"key" => "value",
	"start" => "halo ini data object"
];
echo $data_object->start;
echo PHP_EOL;
var_dump($data_object);
echo PHP_EOL;