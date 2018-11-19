<?php
//Данный числовой ряд - это последовательность Фибоначчи
function sequence($first, $second, $third) {
	if ($first > $third) {
		echo 'Задуманное число НЕ входит в числовой ряд';
	} elseif ($first == $third) {
		echo 'Задуманное число входит в числовой ряд';
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

sequence($a, $b, $_GET['x']); 
?>
