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

// function nameCheck ($needle, $haystack) 
// {
// 	$result = array_search($needle, $haystack);
// 	if ($result !== FALSE) {
// 		echo "{$needle} belongs to the group." . PHP_EOL;
// 		return TRUE ;
// 	} else {
// 		echo "{$needle} does NOT belong to the group." . PHP_EOL;
// 		return FALSE . PHP_EOL;
// 	}

// }

// var_dump(nameCheck('Tina', $names));
// var_dump(nameCheck('Bob', $names));

// function compareArrays ($array1, $array2) 
// {
// 	$match = 0;
// 	$notMatch = 0;
// 	foreach ($array1 as $item) {
// 		$result = array_search($item, $array2);
// 		if ($result !== FALSE) {
// 			return $match++;
// 		} else {
// 			return $notMatch++;
// 		}
// 	}
// 	return $match;
// }

// var_dump(compareArrays($names, $compare));
