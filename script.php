<?php

function sequence($a, $b, $x) {
	if ($a > $x) {
		echo "Задуманное число НЕ входит в числовой ряд";
	} elseif ($a == $x) {
		echo "Задуманное число входит в числовой ряд";
	} else {
		$c = $a;
		$a = $a + $b;
		$b = $c;
		sequence($a, $b, $x);
	}
}

$x = $_GET['x'];
echo "Число ".$x.'<br>';

$a = 1;
$b = 1;

sequence($a, $b, $x); 

?>