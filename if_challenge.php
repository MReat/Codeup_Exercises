<?php 

$number = 5;
$first_condition = 2;
$second_condition = 3;

while ($number <= 15) {

	if ($number % $first_condition == 0 && $number % $second_condition == 0) {
		echo"$number is divisible by {$first_condition} and {$second_condition}" . PHP_EOL;
	} elseif ($number % 4 == 0) {
		echo"$number is divisible by {$second_condition}" . PHP_EOL;
	} elseif ($number % 2 == 0) {
		echo"$number is divisible by {$first_condition}" . PHP_EOL;
	} else {
		echo "$number" . PHP_EOL;
	}
	$number++;
}
 ?>