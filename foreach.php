<?php 
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {
	echo gettype($thing) . PHP_EOL;
}
echo "<<break>>" . PHP_EOL;

foreach ($things as $thing) {
	if(is_integer($thing)) {
		echo "{$thing} is an integer" . PHP_EOL;
	} elseif (is_float($thing)) {
		echo "{$thing} is a float" . PHP_EOL;
	} elseif (is_bool($thing)) {
		echo "{$thing} is a boolean" . PHP_EOL;
	} elseif (is_array($thing)) {
		// echo "{$thing} is an array" . PHP_EOL; // review this
	} elseif (is_null($thing)) {
		echo "{$thing} is a null item" . PHP_EOL;
	} elseif (is_string($thing)) {
		echo "{$thing} is a string" . PHP_EOL;
		echo PHP_EOL;
		echo PHP_EOL;
	}

	if (is_scalar($thing)) {
		echo "{$thing} is a scalar." . PHP_EOL;
	}
}

if(is_string($thing)) {
	echo "{$thing} is a string" . PHP_EOL;
}
foreach ($things as $key => $thing) {
	if (is_array($thing)) {
		echo $key . PHP_EOL;
	}
}

 ?>