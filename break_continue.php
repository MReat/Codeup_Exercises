<?php 

for ($i = 1; $i <= 100; $i++){
	echo $i . PHP_EOL;
	if ($i % 2 == 0) {
		echo "This is an Even Number" . PHP_EOL;
		continue;
	}
}

for ($i = 1; $i <= 100; $i++){
	echo $i . PHP_EOL;
	if ($i == 10) {
		echo "I am breaking" . PHP_EOL;
		break;
	}
}
 ?>