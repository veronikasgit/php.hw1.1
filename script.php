<?php
<<<<<<< HEAD
//Данный числовой ряд - это последовательность Фибоначчи
function sequence($first, $second, $third) {
	if ($first > $third) {
		echo 'Задуманное число НЕ входит в числовой ряд';
	} elseif ($first == $third) {
		echo 'Задуманное число входит в числовой ряд';
=======

//Данный числовой ряд - это последовательность Фибоначчи

function sequence($a, $b, $x) {
	if ($a > $x) {
		echo "Задуманное число НЕ входит в числовой ряд";
	} elseif ($a == $x) {
		echo "Задуманное число входит в числовой ряд";
>>>>>>> 2afe225e4823db33ded2beabea26664cd16787d1
	} else {
		$c = $first;
		$first = $first + $second;
		$second = $c;

		sequence($first, $second, $third);
	}
}

$a = 1;
$b = 1;

$x = $_GET['x'];
echo "Число ".$x.'<br>';

if (!isset($_GET['x'])) {
	$x = 'Параметр х не был передан';
	echo $_GET['x'];
	exit;
}

sequence($a, $b, $x); 
<<<<<<< HEAD
=======

>>>>>>> 2afe225e4823db33ded2beabea26664cd16787d1
?>
