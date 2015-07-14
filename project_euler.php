<?php 
$euler = array();
for ($i = 1; $i < 1000; $i++) {
	if ($i % 5 == 0 || $i % 3 == 0) {
		array_push($euler, $i);
	}
}
echo array_sum($euler);

?>