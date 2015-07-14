<?php 

fwrite(STDOUT, "Choose a beginning number: ");
$beginning_number = trim(fgets(STDIN));

fwrite(STDOUT, "Choose an ending number: ");
$ending_number = trim(fgets(STDIN));

fwrite(STDOUT, "Choose an increment number: ");
$increment_number = trim(fgets(STDIN));

if (!is_numeric($beginning_number) || !is_numeric($ending_number)) {
	echo "Inputs are not valid numbers.  Please enter number for inputs". PHP_EOL;
	exit(0);
}

if ($increment_number == 0) {
	$increment_number = 1;
} 

For Loop FizzBuzz!
for ($i = $beginning_number; $i <= $ending_number; $i += $increment_number) {
	if ($i % 3 == 0  && $i % 5 == 0) {
		echo "FizzBuzz!" . PHP_EOL . PHP_EOL;
		usleep(400000);
	} elseif ($i % 5 == 0) {
		echo "Buzz!"  . PHP_EOL. PHP_EOL;
		usleep(400000);
	} elseif ($i % 3 == 0) {
		echo "Fizz!" . PHP_EOL. PHP_EOL;
		usleep(400000);
	} else {
		echo $i  . PHP_EOL. PHP_EOL;
		usleep(400000);
	}
}

// While Loop FizzBuzz!
// while ($beginning_number <= $ending_number) {

// 	$new_number = $beginning_number;
// 	if ($new_number == $beginning_number && $new_number % 5 != 0 || $new_number % 3 != 0) {
// 		echo $new_number . PHP_EOL . PHP_EOL; 
// 	}elseif ($new_number % 5 == 0 && $new_number % 3 == 0) {
// 		echo "FizzBuzz!" . PHP_EOL . PHP_EOL;
// 		usleep(400000);
// 	} elseif ($new_number % 3 == 0) {
// 		echo "Fizz!" . PHP_EOL . PHP_EOL;
// 		usleep(400000);
// 	} elseif ($new_number % 5 == 0) {
// 		echo "Buzz!" . PHP_EOL . PHP_EOL;
// 		usleep(400000);
// 	} else {
// 		echo $new_number . PHP_EOL . PHP_EOL;
// 		usleep(400000);
// 	}
// 	$new_number = $beginning_number += $increment_number;
// }

// Do While Fizzbuzz
// do {
// 	$new_number = $beginning_number;
// 	if ($new_number == $beginning_number && $new_number % 5 != 0 || $new_number % 3 != 0) {
// 		echo $new_number . PHP_EOL . PHP_EOL; 
// 	}elseif ($new_number % 5 == 0 && $new_number % 3 == 0) {
// 		echo "FizzBuzz!" . PHP_EOL . PHP_EOL;
// 		usleep(400000);
// 	} elseif ($new_number % 3 == 0) {
// 		echo "Fizz!" . PHP_EOL . PHP_EOL;
// 		usleep(400000);
// 	} elseif ($new_number % 5 == 0) {
// 		echo "Buzz!" . PHP_EOL . PHP_EOL;
// 		usleep(400000);
// 	} else {
// 		echo $new_number . PHP_EOL . PHP_EOL;
// 		usleep(400000);
// 	}
// 	$new_number = $beginning_number += $increment_number;

// } while ($beginning_number <= $ending_number);

 ?>