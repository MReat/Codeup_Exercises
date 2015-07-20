<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function combineArrays ($array1, $array2)
{
	$newArray = [];
	foreach ($array1 as $item) {

		if ($item != $array2[0]) {
			array_push($newArray, $item);
			array_push($newArray, $array2[0]);
			array_shift($array2);
		} else {
		$newArray[] = array_shift($array2);
		}
	}
	return $newArray;
}
print_r(combineArrays($names, $compare));

